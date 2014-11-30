<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-30 15:27:22
         compiled from "views/test.html" */ ?>
<?php /*%%SmartyHeaderCode:2036948636547b537ae78f51-56334282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c95f9ffa3e6f657a9b90e77e0ad90bf3f28141' => 
    array (
      0 => 'views/test.html',
      1 => 1417368076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036948636547b537ae78f51-56334282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547b537ae8adb4_78989409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b537ae8adb4_78989409')) {function content_547b537ae8adb4_78989409($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Oi hoje é <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<div><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
, é voce</div>
	</body>
</html>
<?php }} ?>
