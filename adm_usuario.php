<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 11:06
 */

require_once 'sm.php';
require_once 'Usuario.php';

$a = new Usuario();

// delete das pessoas, as multiplas selecionadas na lista
if(isset($_POST['del'])){
    if(is_array($_POST['del'])){

        foreach ($_POST['del'] as $UID) {
            $a->setUID($UID);
            $a->Delete();
        }
    }
}




$sm->assign('lista',$a->Select());


$sm->display("adm_usuarios.tpl");
?>
