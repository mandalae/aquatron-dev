{include file="_header.tpl" title=$headline hideMenu=true}

<h1>{$headline}</h1>

{$text}
<div class="product-list">
{if isset($products)}
    {foreach from=$products item='product'}
        <section>
            <h3>{$product['name']}</h3>
            <div class="image">
                {if $product['image'] > 0}
                    {image id=$product['image'] height="200" width="250"}
                {else}
                    <img src="/_gfx/no-image.png" height="200" width="250" />
                {/if}
            </div>
            <a href="/product/{$product['seo']}" class="product-link button blue">Product information</a>
        </section>
    {/foreach}
    {if $previousPage >= 0}    
        <a href="/products/page/{$previousPage}">Previous</a>
    {/if}
    <a href="/products/page/{$nextPage}">Next</a>
{/if}
</div>

{include file="_footer.tpl"}