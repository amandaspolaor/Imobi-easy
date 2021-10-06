<?php

namespace unipampa\Model;

use \unipampa\DB\Sql;
use \unipampa\Model;

class User extends Model
{

    const SESSION = "User";


    public static function login($login, $password)
    {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM usuario WHERE login = :LOGIN", array(
            ":LOGIN" => $login
        ));

        if (count($results) === 0) {
            throw new \Exception("Usuario inexistente ou senha invalida");
        }

        $data = $results[0];

        // if (password_verify($password, $data["senha"]) === true)

        if ($password === $data["senha"]) {
            $user = new User();

            $user->setData($data);

            $_SESSION[User::SESSION] = $user->getValues();

            return $user;
        } else {
            throw new \Exception("Usuario inexistente ou senha invalida");
        }
    }

    public static function verifyLogin()
    {

        if (
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
            ||
            !(int)$_SESSION[User::SESSION]["id"] > 0
        ) {
            header("Location:/admin/login");
            exit;
        }
    }

    public static function logout()
    {

        $_SESSION[User::SESSION] = null;
    }

    public static function listAll()
    {

        $sql = new Sql();

        return $sql->select("SELECT * FROM usuario");
    }


    public function save()
    {
        $sql = new Sql();

        $sql->query(
            "INSERT INTO usuario(nome,endereco,telefone,email,senha,login) VALUES('{$this->getnome()}','{$this->getendereco()}','{$this->gettelefone()}','{$this->getemail()}','{$this->getsenha()}','{$this->getlogin()}')",
        );

        $results = $sql->select("SELECT * FROM usuario WHERE  nome ='{$this->getnome()}' AND login='{$this->getlogin()}'");

        return $this->setData($results[0]);
    }

    public  function get($id)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM usuario WHERE id='$id'");


        return $this->setData($result[0]);
    }


    public function update()
    {
        $sql = new Sql();


        // UPDATE Customers
        // SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
        // WHERE CustomerID = 1;

        $sql->query("UPDATE usuario SET nome='{$this->getnome()}',endereco='{$this->getendereco()}',telefone='{$this->gettelefone()}',email='{$this->getemail()}',login='{$this->getlogin()}' WHERE id='{$this->getid()}'");

        $results = $sql->select("SELECT * FROM usuario WHERE  nome ='{$this->getnome()}' AND login='{$this->getlogin()}'");

        return $this->setData($results[0]);
    }

    public function delete()
    {
        $sql = new Sql();

        $sql->query("DELETE FROM usuario  WHERE id='{$this->getid()}'");
    }
}
