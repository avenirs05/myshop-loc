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
    
    <div class="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти в корзину">В корзине</a>
    <span id="cartCntItems">
        {if $cartCntItems > 0}
            {$cartCntItems}
                {else}Пусто
        {/if}
    </span>
</div>