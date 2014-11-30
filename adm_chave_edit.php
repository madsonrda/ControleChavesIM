<?php
require_once 'sm.php';
require_once 'Chave.php';

$a = new Chave();

$a->setNumeroSala($_GET['edit']);
$a->load();

if(isset($_POST['NumeroSala'])){
    if($_POST['NumeroSala']!= ''){
        
        $a->setNumeroSala($_POST['NumeroSala']);
        $a->Update();  
        
        $sm->assign('done',true); // passa para view que pode reload
    }// fim do preenchido ok
}// fim do esta setado os campos


$dados = array('NumeroSala'=>$a->getNumeroSala());

$sm->assign("e",$dados);

$sm->display("adm_chave_edit.tpl");
?>
