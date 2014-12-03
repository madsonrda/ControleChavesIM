
        <h3>Adicionar membro</h3>

        <form method="post" enctype="multipart/form-data" action="adm_pertencea_cad.php">
            UID: <br/>
            <input name="UID" type="text"/>
            <br/>
		<input type="hidden" name="GID" value="{$GID}"/>
            <input value="enviar" type="submit"/>
        </form>    
