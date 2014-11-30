<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 02:23
 */

require_once("../db/db.class.php");

class mUsuario extends Db {
    private $UID;
    private $UsuarioNome;
    private $UsuarioPassword;

    public function getUID(){
        return $this->UID;
    }

    public function getUsuarioNome(){
        return $this->UsuarioNome;
    }

    public function getUsuarioPassword(){
        return $this->UsuarioPassword;
    }

    public function setUID($Id){
        $this->id=$UID;
    }

    public function setUsuarioNome($Nome){
        $this->UsuarioNome=$Nome;
    }

    public function setUsuarioPassword($Senha){
        $this->UsuarioPassword=$Senha;
    }

}
?>
