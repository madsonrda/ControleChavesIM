<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 10:10
 */

require_once("aUsuario.php");

class Usuario extends aUsuario{

    public function criptSenha($senha){
        $cr = md5(sha1($senha));
        $this->setUsuarioPassword($cr);
    }

}
?>
