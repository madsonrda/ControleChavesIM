<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 11:06
 */

require_once 'sm.php';
require_once 'PertenceA.php';

$a = new PertenceA();

// delete das pessoas, as multiplas selecionadas na lista
if(isset($_POST['GID'])and isset($_POST['UID'])){
    if($_POST['GID']!='' and $_POST['UID']!=''){

            $a->setGID($_POST['GID']);
	$a->setUID($_POST['UID']);
            $a->Delete();
    }
}


$sm->assign('lista',$a->Select());


$sm->display("adm_pertencea.tpl");
?>
