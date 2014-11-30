<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 11:06
 */

require_once 'sm.php';
require_once 'GrupoAcesso.php';

$a = new GrupoAcesso();

// delete das pessoas, as multiplas selecionadas na lista
if(isset($_POST['del'])){
    if(is_array($_POST['del'])){

        foreach ($_POST['del'] as $GID) {
            $a->setGID($GID);
            $a->Delete();
        }
    }
}


$sm->assign('lista',$a->Select());


$sm->display("adm_grupoacesso.tpl");
?>
