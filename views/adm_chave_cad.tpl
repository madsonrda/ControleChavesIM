<html>
    <head>
        <title>Cadastro de chaves</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        
        {if isset($done)}
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        {/if}

        <h1>Cadastro de chaves</h1>

        <form method="post" enctype="multipart/form-data">
            Numero da Sala: <br/>
            <input name="NumeroSala" type="text"/>
            <br/>
            <input value="Cadastrar" type="submit"/>
        </form>    
    </body>
</html>
