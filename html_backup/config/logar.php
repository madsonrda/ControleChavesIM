<?php
if(isset($_REQUEST['logar'])){
	$usuario = $_REQUEST['usuario'];
	$senha   = $_REQUEST['senha'];
	
	// tratamento de sql injection
	$usuario_escape = addslashes($usuario);	
	$senha_escape = addslashes($senha);

	$sql = "SELECT * FROM login WHERE usuario ='$usuario_escape' AND senha = '$senha_escape' ";
	$query = mysql_query($sql) or die(mysql_error());
	$qtda  = mysql_num_rows($query);
	if($qtda == 0){
		echo 'Usuário ou senha inválidos';	
	}else{		
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;		
		header("Location: admin/admin.php");		
	}
}
?>
