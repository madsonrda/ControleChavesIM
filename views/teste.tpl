<!DOCTYPE html>
<html>
	<head>
		<title>teste</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<form method="post">

    <input type="button" value="Novo registro" onclick="win('adm_usuario_cad.php',280,400)"/>
    <input type="submit" value="Excluir Selecionados"/>

    <table border="1px" width="800px">
        <tr>
            <td width="30px">Deletar</td>
            <td>Nome</td>
            <td>Editar</td>
        </tr>
        {foreach from=$lista item=r}
            <tr>
                <td>
                    <input type="checkbox" name="del[]" value="{$r.id}"/>
                </td>
                <td>{$r.nome}</td>

                <td>
                    <a href="#" onclick="win('adm_usuario_edit.php?edit={$r.id}',350,450)">Editar</a>
                </td>
            </tr>
        {/foreach}
    </table>

</form>
	</body>
</html>
