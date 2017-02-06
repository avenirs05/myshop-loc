<?php
/* Smarty version 3.1.30, created on 2017-02-05 23:22:21
  from "C:\OpenServer\domains\myshop.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5897897dec3353_31946565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66a2d35f780ad0895503846719efb8dd5c7079e4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\header.tpl',
      1 => 1486324819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_5897897dec3353_31946565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
    <?php echo '<script'; ?>
 src="/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="header">
    <h1>my shop - интернет-магазин</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:leftColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="centerColumn">   <?php }
}
