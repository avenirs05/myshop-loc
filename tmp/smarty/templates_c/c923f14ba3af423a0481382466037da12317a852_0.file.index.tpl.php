<?php
/* Smarty version 3.1.30, created on 2017-01-21 20:57:07
  from "C:\OpenServer\domains\myshop.local\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5883a0f396d526_52860060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c923f14ba3af423a0481382466037da12317a852' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\index.tpl',
      1 => 1485018448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5883a0f396d526_52860060 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastProducts']->value, 'item');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
    <div style="float: left; padding: 0 30px 40px 0">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" alt="">
        </a><br>
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
    <?php if (!($_smarty_tpl->tpl_vars['item']->iteration % 3)) {?>
        <div style="clear: both;"></div>
    <?php }
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php }
}
