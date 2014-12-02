<html>
    <head>
        <title>Cadastro de Usuarios</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        
        {if isset($done)}
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        {/if}

        <h1>Cadastro de Usuarios</h1>

        <form method="post" enctype="multipart/form-data">
            Nome do Usuario: <br/>
            <input name="UsuarioNome" type="text"/>
            <br/>
	 Senha: <br/>
            <input name="UsuarioPassword" type="text"/>
            <input value="Cadastrar" type="submit"/>
        </form>    
    </body>
</html>
