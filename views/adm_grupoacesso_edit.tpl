<html>
    <head>
        <title>Edição de grupo</title>
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
            Nome do Grupo: <br/>
            <input name="GrupoNome" type="text" value="{$e.GrupoNome}"/>
            <br/>
            <input value="Salvar" type="submit"/>
        </form>    
    </body>
</html>
