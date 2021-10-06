<?php
session_start();
include "conexao.php";

if(empty($_POST['email']) || empty($_POST['senha'])){
  header('Location: index.php');
  exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT id, email FROM usuario where email='{$email}' and senha='{$senha}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if($row == 1){
  $_SESSION['email'] = $email;
  header('Location: painel.php');
}else{
  header('Location: login.php');
}


?>