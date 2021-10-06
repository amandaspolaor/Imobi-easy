<?php

namespace unipampa\Model;

use \unipampa\DB\Sql;
use \unipampa\Model;

class Imovel extends Model
{



    public static function listAll()
    {

        $sql = new Sql();

        return $sql->select("SELECT * FROM imovel");
    }


    public function save()
    {
        $sql = new Sql();

        $sql->query(
            "INSERT INTO imovel(descricao,tipo,preco,endereco,telefone,imagem) 
            VALUES('{$this->getdescricao()}','{$this->gettipo()}','{$this->getpreco()}','{$this->getendereco()}','{$this->gettelefone()}','{$this->getimagem()}')",
        );

        $results = $sql->select("SELECT * FROM imovel WHERE  telefone ='{$this->gettelefone()}' AND endereco='{$this->getendereco()}'");

        return $this->setData($results[0]);
    }

    public  function get($id)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM imovel WHERE id='$id'");


        return $this->setData($result[0]);
    }


    public function update()
    {
        $sql = new Sql();


        $sql->query("UPDATE imovel SET descricao='{$this->getdescricao()}',tipo='{$this->gettipo()}',preco='{$this->getpreco()}',endereco='{$this->getendereco()}',telefone='{$this->gettelefone()}' WHERE id='{$this->getid()}'");

        $results = $sql->select("SELECT * FROM imovel WHERE id ='{$this->getid()}'");

        return $this->setData($results[0]);
    }

    public function delete()
    {
        $sql = new Sql();

        $sql->query("DELETE FROM imovel  WHERE id='{$this->getid()}'");
    }
}
