<?php
/* Smarty version 3.1.30, created on 2017-01-24 00:04:53
  from "C:\OpenServer\domains\myshop.local\views\default\category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58866ff5b93867_52194458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86470a35d97765ce6114ab2d1abae51dbac89a09' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\category.tpl',
      1 => 1485205488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58866ff5b93867_52194458 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h1>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productsByCat']->value, 'item');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
    <div style="float: left; padding: 0 30px 40px 0">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" alt="">
        </a><br>
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
    <?php if (!($_smarty_tpl->tpl_vars['item']->iteration % 3)) {?>
        <div style="clear: both;"></div>
    <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
} else {
?>

        Нет товаров
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['childCats']->value, 'item');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
    <h2>
        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        </a>    
    </h2>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
<?php }
}
