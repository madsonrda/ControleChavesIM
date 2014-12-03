<?php
require_once 'sm.php';
require_once 'PertenceA.php';

$a = new PertenceA();
if( isset($_POST['UID'])and isset($_POST['GID'])){
    
    if($_POST['UID']!= '' and $_POST['GID']){
        
        // deve cadastrar
        $a->setUID($_POST['UID']);
	$a->setGID( $_POST['GID']);
        $a->Insert();
        
        $sm->assign("done",true);
        
    }// fim do tem preenchido
    
}// fim do isset

//$sm->display("adm_pertencea_cad.tpl");
?>
