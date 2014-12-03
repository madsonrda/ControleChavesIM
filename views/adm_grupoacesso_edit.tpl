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
	<p>Lista de Salas com acesso</p>
	 <table border="1">
        <tr>
            <td>Sala</td>
        </tr>
        
        {foreach from=$c item=r}
        <tr>
            <td>{$r.NumeroSala}</td>
        </tr>
        {/foreach}
    </table>
	 

  
	 <p> Lista de Salas disponiveis</p>
         <table border="1">
        <tr>
            <td>Sala</td>
        </tr>

        {foreach from=$Salas item=p}
        <tr>
            <td>{$p.NumeroSala}</td>
        </tr>
        {/foreach}
    </table>
		{include file="adm_temacesso_cad.tpl"}

<p>
		{include file="adm_temacesso_rem.tpl"}

         <p> Lista dos membros</p>
         <table border="1">
        <tr>
            <td>Nome</td>
        </tr>

        {foreach from=$u item=q}
        <tr>
            <td>{$q.UsuarioNome}</td>
        </tr>
        {/foreach}
    </table>


         <p> Lista dos usuarios disponiveis</p>
         <table border="1">
        <tr>
		<td>UID</td>
            <td>Nome</td>
        </tr>

        {foreach from=$Membro item=s}
        <tr>
            <td>{$s.UsuarioNome}</td>
		<td>{$s.UID}</td>
        </tr>
        {/foreach}
    </table>

                {include file="adm_pertencea_cad.tpl"}

<p>
                {include file="adm_pertencea_rem.tpl"}


</body>
	</html>
