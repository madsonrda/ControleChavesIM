<html>
    <head>
        <title>Edição de chave</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        {if isset($done)}
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        {/if}
        
        <h1>Edição de chave</h1>

        <form method="post" enctype="multipart/form-data">
            Numero da Sala: <br/>
            <input name="NumeroSala" type="text" value="{$e.NumeroSala}"/>
            <br/>
            <input value="Salvar" type="submit"/>
        </form>    
    </body>
</html>
