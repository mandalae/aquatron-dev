{include file="_header.tpl" title=$headline hideMenu=true}

<h1>{$headline}</h1>

{$text}
<div class="product-list">
{if isset($products)}
    {foreach from=$products item='product'}
        <section>
            <h3>{$product['name']}</h3>
            <div class="image">{image id=$product['image'] height="200" width="250"}</div>
            <div class="description">{$product['description']|nl2br}</div>
        </section>
    {/foreach}
{/if}
</div>

{include file="_footer.tpl"}