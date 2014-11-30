<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 18:43:15
         compiled from "views/adm_chave_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009319363547b8163dedd35-38339327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b99a5f1b8af974e5802cc733b2528a7c58b6f662' => 
    array (
      0 => 'views/adm_chave_edit.tpl',
      1 => 1417380131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009319363547b8163dedd35-38339327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'done' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b8163e12679_10762577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b8163e12679_10762577')) {function content_547b8163e12679_10762577($_smarty_tpl) {?><html>
    <head>
        <title>Edição de chave</title>
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
        
        <h1>Edição de chave</h1>

        <form method="post" enctype="multipart/form-data">
            Numero da Sala: <br/>
            <input name="NumeroSala" type="text" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['NumeroSala'];?>
"/>
            <br/>
            <input value="Salvar" type="submit"/>
        </form>    
    </body>
</html>
<?php }} ?>
