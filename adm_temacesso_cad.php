<?php
require_once 'sm.php';
require_once 'Tem_acesso.php';

$a = new Tem_acesso();
if( isset($_POST['NumeroSala'])and isset($_POST['GID'])){
    
    if($_POST['NumeroSala']!= '' and $_POST['GID']){
        
        // deve cadastrar
        $a->setNumeroSala($_POST['NumeroSala']);
	$a->setGID( $_POST['GID']);
        $a->Insert();
        
        $sm->assign("done",true);
        
    }// fim do tem preenchido
    
}// fim do isset

//$sm->display("adm_temacesso_cad.tpl");
?>
