<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 20:16:48
         compiled from "views/adm_grupoacesso_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1579859291547b96ac221620-09711568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a1a14e33a115c21103be1a23607da6240e9077' => 
    array (
      0 => 'views/adm_grupoacesso_edit.tpl',
      1 => 1417385805,
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
    </body>
</html>
<?php }} ?>
