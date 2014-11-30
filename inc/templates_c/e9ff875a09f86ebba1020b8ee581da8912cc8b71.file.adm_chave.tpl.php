<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 18:20:24
         compiled from "views/adm_chave.tpl" */ ?>
<?php /*%%SmartyHeaderCode:675793769547b797f06b119-25540866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ff875a09f86ebba1020b8ee581da8912cc8b71' => 
    array (
      0 => 'views/adm_chave.tpl',
      1 => 1417378821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675793769547b797f06b119-25540866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b797f0d12f5_39156218',
  'variables' => 
  array (
    'lista' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b797f0d12f5_39156218')) {function content_547b797f0d12f5_39156218($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form method="post">
    
    <input type="button" value="Novo registro" onclick="win('adm_chave_cad.php',280,400)"/>
    <input type="submit" value="Excluir Selecionados"/>
    
    <table border="1px" width="800px">
        <tr>
            <td width="30px">Deletar</td>
            <td>Sala</td>
            <td>Editar</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
        <tr>
            <td>
            <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['NumeroSala'];?>
"/>
            </td>
		<td><?php echo $_smarty_tpl->tpl_vars['r']->value['NumeroSala'];?>
</td>
            <td>
                <a href="#" onclick="win('adm_chave_edit.php?edit=<?php echo $_smarty_tpl->tpl_vars['r']->value['NumeroSala'];?>
',350,450)">Editar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
