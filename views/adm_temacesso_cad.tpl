
        <h3>Adicionar Sala</h3>

        <form method="post" enctype="multipart/form-data" action="adm_temacesso_cad.php">
            Sala: <br/>
            <input name="NumeroSala" type="text"/>
            <br/>
		<input type="hidden" name="GID" value="{$GID}"/>
            <input value="enviar" type="submit"/>
        </form>    
