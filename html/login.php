<?php session_start(); include 'config/conn.php';  ?>
	<!doctype html>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">	
	<meta charset="utf-8">
	<title>ChavesIM - Login</title>
	<link href="css/loginStyle.css" rel="stylesheet">
</head>

<body>
	
	<div>
		<img src="ufba_logo.png">
	</div>
	

	<div class= "bg-info" class="form-group" id="formulario">
		<form name="form" method="post" enctype="multipart/form-data" id="form" >
			Gerenciador de Chaves do IM</br>
			<label>Usuario</label>
			<input class="form-control" type="text" name="usuario" id="usuario" placeholder="Nome de usuario">
			<label>Senha</label>
			<input class="form-control" type="password" name="senha" id="senha" placeholder="Sua senha">
			<input class="form-control" type="submit" name="logar" id="logar" value="Logar" class="btn btn-primary"> 
		</form>
		<?php  include 'config/logar.php';  ?>
	</div>
</body>
</html>