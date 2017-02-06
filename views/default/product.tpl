<h3>{$product.name}</h3>

<img width="575" src="/images/products/{$product.image}">
Стоимость: {$product.price}

<a id="removeCart_{$product.id}" href="#" 
   {if ! $itemInCart} 
       class ="hideme" 
   {/if}       
   onclick="removeFromCart({$product.id}); return false;">
    Удалить из корзины
</a>

<a id="addCart_{$product.id}" href="#" 
   {if $itemInCart} 
       class ="hideme" 
   {/if} 
   onclick="addToCart({$product.id}); return false;">
    Добавить в корзину
</a>
    
<p>Описание<br>
    {$product.description}
</p>


