<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 18:33:39
         compiled from "views/adm_chave_cad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:906786399547b7f23e80143-04867182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '084e0260507ce9f5e19355966850cb3f152a259c' => 
    array (
      0 => 'views/adm_chave_cad.tpl',
      1 => 1417379602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '906786399547b7f23e80143-04867182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'done' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b7f23ea0673_66716801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b7f23ea0673_66716801')) {function content_547b7f23ea0673_66716801($_smarty_tpl) {?><html>
    <head>
        <title>Cadastro de chaves</title>
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

        <h1>Cadastro de chaves</h1>

        <form method="post" enctype="multipart/form-data">
            Numero da Sala: <br/>
            <input name="NumeroSala" type="text"/>
            <br/>
            <input value="Cadastrar" type="submit"/>
        </form>    
    </body>
</html>
<?php }} ?>
