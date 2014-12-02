<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-01 09:39:18
         compiled from "views/adm_grupoacesso_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1579859291547b96ac221620-09711568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a1a14e33a115c21103be1a23607da6240e9077' => 
    array (
      0 => 'views/adm_grupoacesso_edit.tpl',
      1 => 1417433926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1579859291547b96ac221620-09711568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b96ac239dc1_61297858',
  'variables' => 
  array (
    'done' => 0,
    'e' => 0,
    'c' => 0,
    'r' => 0,
    'Salas' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b96ac239dc1_61297858')) {function content_547b96ac239dc1_61297858($_smarty_tpl) {?><html>
    <head>
        <title>Edição de grupo</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        <?php if (isset($_smarty_tpl->tpl_vars['done']->value)) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            parent.location.reload(true); 
        <?php echo '</script'; ?>
>
        <?php }?>
        
        <h1>Edição de grupo</h1>

        <form method="post" enctype="multipart/form-data">
            Nome do Grupo: <br/>
            <input name="GrupoNome" type="text" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['GrupoNome'];?>
"/>
            <br/>
            <input value="Salvar" type="submit"/>
        </form> 
	<p>Lista de Salas com acesso</p>
	 <table border="1">
        <tr>
            <td>Sala</td>
        </tr>
        
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['NumeroSala'];?>
</td>
        </tr>
        <?php } ?>
    </table>
	 

  
	 <p> Lista de Salas disponiveis</p>
         <table border="1">
        <tr>
            <td>Sala</td>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Salas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['NumeroSala'];?>
</td>
        </tr>
        <?php } ?>
    </table>
		<?php echo $_smarty_tpl->getSubTemplate ("adm_temacesso_cad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p>
		<?php echo $_smarty_tpl->getSubTemplate ("adm_temacesso_rem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
	</html>
<?php }} ?>
