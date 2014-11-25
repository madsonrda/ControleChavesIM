<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("../db/db.class.php");

class mUsuario extends Db {
    private $id;
    private $nome;
    private $senha;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setId($Id){
        $this->id=$Id;
    }

    public function setNome($Nome){
        $this->nome=$Nome;
    }

    public function setSenha($Senha){
        $this->senha=$Senha;
    }

}
?>
