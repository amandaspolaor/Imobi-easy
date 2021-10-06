<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use unipampa\DB\Sql;
use unipampa\Model\Imovel;
use \unipampa\Page;
use unipampa\PageAdmin;
use unipampa\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$imoveis = Imovel::listAll();

	$page = new Page();

	$page->setTpl("index",array(
		"imoveis"=>$imoveis
	));
    
});

$app->get('/admin', function() {

	User::verifyLogin();
    
	$page = new PageAdmin();
	
	$page->setTpl("index");

});

$app->get('/admin/login', function() {
    
	$page = new PageAdmin([
		"header" => false,
		"footer" => false
	]);

	$sql = new Sql();
	
	$page->setTpl("login");

});


$app->post('/admin/login', function(){
	
	User::login($_POST["login"], $_POST['password']);

	header("Location:/admin");

	exit;

});



$app->get('/admin/logout', function(){
	
	User::logout();

	header("Location:/admin/login");

	exit;

});

$app->get('/admin/users',function(){

	User::verifyLogin();

	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl("users",array(
		"users"=>$users
	));

});



$app->get('/admin/users/create',function(){

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("users-create");

});

$app->get("/admin/users/:id/delete", function($id){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$id);

	$user->delete();

	header("Location: /admin/users");
	exit;

});


$app->get('/admin/users/:id',function($id){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$id);

	$page = new PageAdmin();
	
	$page->setTpl("users-update",array(
		"user"=>$user->getValues()
	));

});


$app->post("/admin/users/create", function(){

	User::verifyLogin();

	$user = new User();

	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");
	exit;

});

$app->post("/admin/users/:id", function($id){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$id);

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");
	exit;

});











$app->get('/admin/imoveis',function(){

	User::verifyLogin();

	$imoveis = Imovel::listAll();

	$page = new PageAdmin();

	$page->setTpl("imoveis",array(
		"imoveis"=>$imoveis
	));

});

$app->get('/admin/imoveis/create',function(){

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("imoveis-create");

});

$app->get("/admin/imoveis/:id/delete", function($id){

	$imovel = new Imovel();

	$imovel->get((int)$id);

	$imovel->delete();

	User::verifyLogin();

	header("Location: /admin/users");
	exit;

});

$app->get('/admin/imoveis/:id',function($id){

	User::verifyLogin();

	$imovel = new Imovel();

	$imovel->get((int)$id);

	$page = new PageAdmin();

	$page->setTpl("imoveis-update",array(
		"imovel"=>$imovel->getValues()
	));
});


$app->post("/admin/imoveis/create", function(){

	User::verifyLogin();

	$imovel = new Imovel();

	$imovel->setData($_POST);

	$imovel->save();
	header("Location: /admin/imoveis");
	exit;

});

$app->post("/admin/imoveis/:id", function($id){

	User::verifyLogin();

	$imovel = new Imovel();

	$imovel->get((int)$id);

	$imovel->setData($_POST);

	$imovel->update();
	header("Location: /admin/imoveis");
	exit;

});






$app->run();

 ?>