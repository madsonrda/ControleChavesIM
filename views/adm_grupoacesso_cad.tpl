<html>
    <head>
        <title>Cadastro de Grupos</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        
        {if isset($done)}
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        {/if}

        <h1>Cadastro de Grupos</h1>

        <form method="post" enctype="multipart/form-data">
            Nome do Grupo: <br/>
            <input name="GrupoNome" type="text"/>
            <br/>
            <input value="Cadastrar" type="submit"/>
        </form>    
    </body>
</html>
