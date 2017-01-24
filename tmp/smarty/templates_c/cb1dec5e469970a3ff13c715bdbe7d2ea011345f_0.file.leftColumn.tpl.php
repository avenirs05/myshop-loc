<?php
/* Smarty version 3.1.30, created on 2017-01-24 18:29:11
  from "C:\OpenServer\domains\myshop.local\views\default\leftColumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588772c770e767_95641984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1dec5e469970a3ff13c715bdbe7d2ea011345f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\leftColumn.tpl',
      1 => 1485271671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588772c770e767_95641984 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:<br>            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_Main_Cats_With_Children']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                 <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </a>
                <br>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                        --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/">
                              <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>

                          </a>
                          <br>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        
        </div>
    </div>
</div><?php }
}
