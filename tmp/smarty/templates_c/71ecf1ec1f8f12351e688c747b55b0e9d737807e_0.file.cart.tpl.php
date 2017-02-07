<?php
/* Smarty version 3.1.30, created on 2017-02-07 12:24:55
  from "C:\OpenServer\domains\myshop.local\views\default\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589992676df099_09391703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71ecf1ec1f8f12351e688c747b55b0e9d737807e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\cart.tpl',
      1 => 1486459492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589992676df099_09391703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['products']->value) {?>
    В корзине пусто
<?php } else { ?>
    <h2>Данные заказа</h2>
    <tr>
        <td>№</td>
        <td>Наименование</td>
        <td>Количество</td>
        <td>Цена за единицу</td>
        <td>Цена всего</td>
        <td>Действие</td>
    </tr>

<?php }?>




<?php }
}
