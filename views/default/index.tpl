{foreach $lastProducts as $item}
    <div style="float: left; padding: 0 30px 40px 0">
        <a href="/product/{$item.id}/">
            <img src="/images/products/{$item.image}" width="100" alt="">
        </a><br>
        <a href="/product/{$item.id}/">{$item.name}</a>
    </div>
    {if $item@iteration is div by 3}
        <div style="clear: both;"></div>
    {/if}
{/foreach} 