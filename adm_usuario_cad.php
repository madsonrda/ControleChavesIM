<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 10:59
 */

require_once 'sm.php';
require_once 'Usuario.php';

$a = new Usuario();

if(isset($_POST['UsuarioNome']) and isset($_POST['UsuarioPassword']) ){

    if($_POST['UsuarioNome']!= ''  and $_POST['UsuarioPassword']){

        // deve cadastrar
        $a->setUsuarioNome($_POST['UsuarioNome']);
        $a->criptSenha($_POST['UsuarioPassword']);

        $a->Insert();

        $sm->assign("done",true);

    }// fim do tem preenchido

}// fim do isset

$sm->display("adm_usuarios_cad.tpl");
?>
