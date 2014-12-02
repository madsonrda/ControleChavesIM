<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 11:06
 */

require_once 'sm.php';
require_once 'Tem_acesso.php';

$a = new Tem_acesso();

// delete das pessoas, as multiplas selecionadas na lista
if(isset($_POST['GID'])and isset($_POST['NumeroSala'])){
    if($_POST['GID']!='' and $_POST['NumeroSala']!=''){

            $a->setGID($_POST['GID']);
	$a->setNumeroSala($_POST['NumeroSala']);
            $a->Delete();
    }
}


$sm->assign('lista',$a->Select());


$sm->display("adm_temacesso.tpl");
?>
