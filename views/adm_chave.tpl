{include file="head.tpl"}

<form method="post">
    
    <input type="button" value="Novo registro" onclick="win('adm_chave_cad.php',280,400)"/>
    <input type="submit" value="Excluir Selecionados"/>
    
    <table border="1px" width="800px">
        <tr>
            <td width="30px">Deletar</td>
            <td>Sala</td>
            <td>Editar</td>
        </tr>
        {foreach from=$lista item=r}
        <tr>
            <td>
            <input type="checkbox" name="del[]" value="{$r.NumeroSala}"/>
            </td>
		<td>{$r.NumeroSala}</td>
            <td>
                <a href="#" onclick="win('adm_chave_edit.php?edit={$r.NumeroSala}',350,450)">Editar</a>
            </td>
        </tr>
        {/foreach}
    </table>
    
</form>

{include file="footer.tpl"}
