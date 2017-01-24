<?php
/* Smarty version 3.1.30, created on 2017-01-24 21:55:46
  from "C:\OpenServer\domains\myshop.local\views\default\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887a33268cc68_20446212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a56a0ca6b16b2a8f705a5fc4f09c116dd1710d5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\product.tpl',
      1 => 1485284057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5887a33268cc68_20446212 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


<a href="#">Добавить в корзину</a>
<p>Описание<br>
    <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

</p>


<?php }
}
