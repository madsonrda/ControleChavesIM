<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 10:27
 */

require_once 'sm.php';
require_once 'Usuario.php';

$a = new Usuario();

$a->setUID($_GET['edit']);
$a->load();

if(isset($_POST['UsuarioNome']) or isset($_POST['UsuarioPassword'])){
    if($_POST['UsuarioNome']!= '' and $_POST['UsuarioPassword']!= ''){

        $a->setUsuarioNome($_POST['UsuarioNome']);
	$a->criptSenha($_POST['UsuarioPassword']);
        $a->Update();

        $sm->assign('done',true); // passa para view que pode reload
	
    }// fim do preenchido ok
	else{
		if($_POST['UsuarioNome']!= ''){

        		$a->setUsuarioNome($_POST['UsuarioNome']);
        		$a->Update();

        		$sm->assign('done',true); // passa para view que pode reload

    		}else{
			if($_POST['UsuarioPassword']!= ''){

        			$a->criptSenha($_POST['UsuarioPassword']);
        			$a->Update();

			        $sm->assign('done',true); // passa para view que pode reload

    }// fim do preenchido ok

		}	

	}
}// fim do esta setado os campos


$dados = array('UsuarioNome'=>$a->getUsuarioNome());

$sm->assign("e",$dados);

$sm->display("adm_usuarios_edit.tpl");
?>
