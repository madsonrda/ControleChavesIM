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

//gerencia de acesso a chaves
$listaChaves = $a->SelectChaves();//obtem lista das chaves com acesso
$sm->assign("c",$listaChaves);
$sm->assign("GID",$a->getGID());
//lista das chaves disponiveis
require_once 'Chave.php';

$b = new Chave();

$sm->assign('Salas',$b->Select());
//gerencia dos membros
$listaUsuarios = $a->SelectUsuarios();//obtem lista dos membros
$sm->assign("u",$listaUsuarios);
//lista dos usuarios disponiveis
require_once 'Usuario.php';

$c = new Usuario();

$sm->assign('Membro',$c->Select());

$sm->display("adm_grupoacesso_edit.tpl");
?>
