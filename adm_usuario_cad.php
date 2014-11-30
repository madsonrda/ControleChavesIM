<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 10:59
 */

require_once 'sm.php';
require_once 'core/Usuario.php';

$a = new Usuario();

if(isset($_POST['nome']) and isset($_POST['senha']) ){

    if($_POST['nome']!= ''  and $_POST['senha']){

        // deve cadastrar
        $a->setUsuarioNome($_POST['nome']);
        $a->criptSenha($_POST['senha']);

        $a->Insert();

        $sm->assign("done",true);

    }// fim do tem preenchido

}// fim do isset

$sm->display("adm_usuario_cad.tpl");
?>
