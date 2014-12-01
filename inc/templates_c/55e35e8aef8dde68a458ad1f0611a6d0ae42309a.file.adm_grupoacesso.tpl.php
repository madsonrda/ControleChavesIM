<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 20:06:31
         compiled from "views/adm_grupoacesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451595316547b94e708d3c5-98416312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55e35e8aef8dde68a458ad1f0611a6d0ae42309a' => 
    array (
      0 => 'views/adm_grupoacesso.tpl',
      1 => 1417384968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451595316547b94e708d3c5-98416312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b94e70a7861_28219978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b94e70a7861_28219978')) {function content_547b94e70a7861_28219978($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form method="post">
    
    <input type="button" value="Novo registro" onclick="win('adm_grupoacesso_cad.php',280,400)"/>
    <input type="submit" value="Excluir Selecionados"/>
    
    <table border="1px" width="800px">
        <tr>
            <td width="30px">Deletar</td>
            <td>Nome do Grupo</td>
            <td>Editar</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
        <tr>
            <td>
            <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['GID'];?>
"/>
            </td>
		<td><?php echo $_smarty_tpl->tpl_vars['r']->value['GrupoNome'];?>
</td>
            <td>
                <a href="#" onclick="win('adm_grupoacesso_edit.php?edit=<?php echo $_smarty_tpl->tpl_vars['r']->value['GID'];?>
',350,450)">Editar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
