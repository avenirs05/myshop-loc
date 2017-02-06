<h3>{$product.name}</h3>

<img width="575" src="/images/products/{$product.image}">
Стоимость: {$product.price}

<a id="addCart_{$product.id}" href="#" onclick="addToCart({$product.id}); return false;">
    Добавить в корзину
</a>
<p>Описание<br>
    {$product.description}
</p>


