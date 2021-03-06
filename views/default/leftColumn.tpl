<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:<br>            
            {foreach $all_Main_Cats_With_Children as $item}
                 <a href="/category/{$item.id}/">
                    {$item.name}
                </a>
                <br>
                {if isset($item.children)}
                    {foreach $item.children as $itemChild}
                        --<a href="/category/{$itemChild.id}/">
                              {$itemChild.name}
                          </a>
                          <br>
                    {/foreach}
                {/if}
            {/foreach}        
        </div>
    </div>
    
    <div id="userBox" class="hideme">
        <a href="#" id="userLink"></a><br>
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>
        
    <div id="loginBox">
        <div class="menuCaption">Авторизация</div>
        <input type="text" id="loginEmail" name="loginEmail" value=""><br>
        <input type="password" id="loginPwd" name="loginPwd" value=""><br>
        <input type="button" onclick="login();" value="Войти"><br>
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
        {if $cartCntItems > 0}
            {$cartCntItems}
                {else}Пусто
        {/if}
    </span>
</div>