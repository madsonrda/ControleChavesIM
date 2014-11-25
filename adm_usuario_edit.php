<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 10:27
 */

require_once 'sm.php';
require_once 'core/Usuario.php';

$a = new Usuario();

$a->setId($_GET['edit']);
$a->load();

if(isset($_POST['nome'])){
    if($_POST['nome']!= ''){

        $a->setNome($_POST['nome']);

        $a->Update();

        $sm->assign('done',true); // passa para view que pode reload
    }// fim do preenchido ok
}// fim do esta setado os campos


$dados = array('nome'=>$a->getNome());

$sm->assign("e",$dados);

$sm->display("adm_usuario_edit.tpl");
?>