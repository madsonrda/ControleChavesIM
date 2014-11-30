<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 20:08:48
         compiled from "views/adm_grupoacesso_cad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486085693547b94f330bd61-06736391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16b557ba54119110cac5fbf09bd156c7d6dabf97' => 
    array (
      0 => 'views/adm_grupoacesso_cad.tpl',
      1 => 1417385321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1486085693547b94f330bd61-06736391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b94f3320970_28417056',
  'variables' => 
  array (
    'done' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b94f3320970_28417056')) {function content_547b94f3320970_28417056($_smarty_tpl) {?><html>
    <head>
        <title>Cadastro de Grupos</title>
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

        <h1>Cadastro de Grupos</h1>

        <form method="post" enctype="multipart/form-data">
            Nome do Grupo: <br/>
            <input name="GrupoNome" type="text"/>
            <br/>
            <input value="Cadastrar" type="submit"/>
        </form>    
    </body>
</html>
<?php }} ?>
