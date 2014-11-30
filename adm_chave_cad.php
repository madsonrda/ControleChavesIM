<?php
require_once 'sm.php';
require_once 'Chave.php';

$a = new Chave();

if(isset($_POST['NumeroSala'])){
    
    if($_POST['NumeroSala']!= ''){
        
        // deve cadastrar
        $a->setNumeroSala($_POST['NumeroSala']);
        
        $a->Insert();
        
        $sm->assign("done",true);
        
    }// fim do tem preenchido
    
}// fim do isset

$sm->display("adm_chave_cad.tpl");
?>
