<html>
    <head>
        <title>Edição de usuario</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        {if isset($done)}
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        {/if}
        
        <h1>Edição de grupo</h1>

        <form method="post" enctype="multipart/form-data">
            Nome do Usuario: <br/>
            <input name="UsuarioNome" type="text" value="{$e.UsuarioNome}"/>
            <br/>
            Password: <br/>
            <input name="UsuarioPassword" type="text" value=""/>
            <br/>
            <input value="Salvar" type="submit"/>
        </form> 
	</body>
</html>
