<h1>Товары категории {$category.name}</h1>

{foreach $productsByCat as $item}
    <div style="float: left; padding: 0 30px 40px 0">
        <a href="/product/{$item.id}">
            <img src="/images/products/{$item.image}" width="100" alt="">
        </a><br>
        <a href="/product/{$item.id}">{$item.name}</a>
    </div>
    {if $item@iteration is div by 3}
        <div style="clear: both;"></div>
    {/if}
    {foreachelse}
        Нет товаров
{/foreach} 

{foreach $childCats as $item}
    <h2>
        <a href="/category/{$item.id}/">
            {$item.name}
        </a>    
    </h2>
{/foreach} 
