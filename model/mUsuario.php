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
    private $email;
    private $senha;
    private $ativoem;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getAtivoem(){
        return $this->ativoem;
    }


    public function setId($Id){
        $this->id=$Id;
    }

    public function setNome($Nome){
        $this->nome=$Nome;
    }

    public function setEmail($Email){
        $this->email=$Email;
    }

    public function setSenha($Senha){
        $this->senha=$Senha;
    }

    public function setAtivoem($Ativoem){
        $this->ativoem=$Ativoem;
    }

}
?>
