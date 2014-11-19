<?php 
// Iniciando ou reassumindo sessão
session_start(); 
// confirmando sessão 
if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){   
	header("Location: ../login.php");      
}
// destruir sesssão 
if(isset($_REQUEST['sair'])){   
	session_destroy();
	header("Location: ../login.php");   
}

function logout(){
	if(isset($_REQUEST['sair'])){   
		session_destroy();
		header("Location: ../login.php");   
	}
}
?>