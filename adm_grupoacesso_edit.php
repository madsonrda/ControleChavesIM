<?php
require_once 'sm.php';
require_once 'GrupoAcesso.php';

$a = new GrupoAcesso();

$a->setGID($_GET['edit']);
$a->load();

if(isset($_POST['GID']) and isset($_POST['GrupoNome'])){
    if($_POST['GID']!= '' and $_POST['GrupoNome']!= ''){
        
        $a->setGID($_POST['GID']);
	$a->setGrupoNome($_POST['GrupoNome']);

        $a->Update();  
        
        $sm->assign('done',true); // passa para view que pode reload
    }// fim do preenchido ok
}// fim do esta setado os campos


$dados = array('GID'=>$a->getGID(), 'GrupoNome'=>$a->getGrupoNome());

$sm->assign("e",$dados);

$sm->display("adm_grupoacesso_edit.tpl");
?>