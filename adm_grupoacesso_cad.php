<?php
require_once 'sm.php';
require_once 'GrupoAcesso.php';

$a = new GrupoAcesso();

if( isset($_POST['GrupoNome'])){
    
    if($_POST['GrupoNome']!= ''){
        
        // deve cadastrar
        $a->setGrupoNome($_POST['GrupoNome']);
        $a->Insert();
        
        $sm->assign("done",true);
        
    }// fim do tem preenchido
    
}// fim do isset

$sm->display("adm_grupoacesso_cad.tpl");
?>
