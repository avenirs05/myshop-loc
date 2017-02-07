<h1>Корзина</h1>

{if ! $products}
    В корзине пусто
{else}
    <h2>Данные заказа</h2>
    <table>
        <tr>
            <td>№</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за единицу</td>
            <td>Цена всего</td>
            <td>Действие</td>
        </tr>    
    {foreach $products as $item name=products}
        <tr>
            <td>
                {$smarty.foreach.products.iteration}
            </td>
            <td>
                <a href="/product/{$item.id}/">{$item.name}</a><br>
            </td>
            <td>
                <input type="text" name="itemCnt_{$item.id}" id="itemCnt_{$item.id}" 
                       value="1" onchange="conversionPrice({$item.id});">
            </td>
            <td>
                <span id ="itemPrice_{$item.id}" value="{$item.price}">
                    {$item.price}
                </span>
            </td>
            <td>
                <span id ="itemTotalPrice_{$item.id}">
                    {$item.price}
                </span>
            </td>
            <td>
                <a id="removeCart_{$item.id}" href="#" 
                   onclick="removeFromCart({$item.id}); return false;" title="Удалить">
                   Удалить                
                </a>
                <a id="addCart_{$item.id}" class="hideme" href="#" 
                   onclick="addToCart({$item.id}); return false;" title="Восстановить">
                    Восстановить                
                </a>
            </td>
        </tr>
    {/foreach}
    </table>
{/if}




