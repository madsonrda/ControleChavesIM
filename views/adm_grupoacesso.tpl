{include file="head.tpl"}

<form method="post">
    
    <input type="button" value="Novo registro" onclick="win('adm_grupoacesso_cad.php',280,400)"/>
    <input type="submit" value="Excluir Selecionados"/>
    
    <table border="1px" width="800px">
        <tr>
            <td width="30px">Deletar</td>
            <td>Nome do Grupo</td>
            <td>Editar</td>
        </tr>
        {foreach from=$lista item=r}
        <tr>
            <td>
            <input type="checkbox" name="del[]" value="{$r.GID}"/>
            </td>
		<td>{$r.GrupoNome}</td>
            <td>
                <a href="#" onclick="win('adm_grupoacesso_edit.php?edit={$r.GID}',350,450)">Editar</a>
            </td>
        </tr>
        {/foreach}
    </table>
    
</form>

{include file="footer.tpl"}
