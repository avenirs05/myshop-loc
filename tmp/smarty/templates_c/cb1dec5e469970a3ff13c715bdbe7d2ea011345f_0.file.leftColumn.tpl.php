<?php
/* Smarty version 3.1.30, created on 2017-02-13 17:25:25
  from "C:\OpenServer\domains\myshop.local\views\default\leftColumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a1c1d56c4e89_09603449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1dec5e469970a3ff13c715bdbe7d2ea011345f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\leftColumn.tpl',
      1 => 1486995447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1c1d56c4e89_09603449 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    <div id="userBox" class="hideme">
        <a href="#" id="userLink"></a><br>
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>    

    <div id="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox();">
            Регистрация
        </div>
        <div id="registerBoxHidden">
            email: <br>
            <input type="text" id="email" name="email" value=""><br>
            пароль: <br>
            <input type="password" id="pwd1" name="pwd1" value=""><br>
            повторить пароль: <br>
            <input type="password" id="pwd2" name="pwd2" value=""><br>
            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"><br>
        </div>
    </div>
        
        
    <div class="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти в корзину">В корзине</a>
    <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?>
            <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

                <?php } else { ?>Пусто
        <?php }?>
    </span>
</div><?php }
}
