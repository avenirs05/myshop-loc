<?php
/* Smarty version 3.1.30, created on 2017-02-05 23:32:51
  from "C:\OpenServer\domains\myshop.local\views\default\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58978bf35c2b54_74324413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a56a0ca6b16b2a8f705a5fc4f09c116dd1710d5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\product.tpl',
      1 => 1486326620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58978bf35c2b54_74324413 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;">
    Добавить в корзину
</a>
<p>Описание<br>
    <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

</p>


<?php }
}
