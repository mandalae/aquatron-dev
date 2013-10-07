{include file="_header.tpl" title=$headline hideMenu=true}

<h1>{$headline}</h1>

{$text}

<div id="search-criteria" style="float: left; clear: both; width: 1020px; margin-bottom: 30px; background: #FDFDFD; padding: 20px; border-radius: 5px; border: #666 1px solid; ">
    <form method="post">
        <div style="float: left; width: 300px; clear: none; margin-right: 30px;">
            <p>
              <label for="amount">Price range:</label>
              <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
            </p>
            <div id="priceRange"></div>
        </div>
        <div class="form-element" style="float: left; clear: none; margin-right: 30px;">
            <label for="product-brands">Manufacturer:</label>
            <select id="product-brands">
                <option value=""></option>
                {foreach $brands as $brand}
                    <option value="{$brand['id']}">{$brand['name']}</option>
                {/foreach}
            </select>
        </div>
        
        <div class="form-element" style="float: left; clear: none;">
            <label for="product-categories">Category:</label>
            <select id="product-categories">
                <option value=""></option>
                {foreach $categories as $category}
                    <option value="{$category['parent']['id']}">{$category['parent']['name']}</option>
                    {foreach $category['children'] as $child}
                        <option value="{$child['id']}">&nbsp;&nbsp;{$child['name']}</option>
                    {/foreach}
                {/foreach}
            </select>
        </div>
    </form>
</div>

<div class="product-list" style="float: left; clear: both;">
{if isset($products)}
    {foreach from=$products item='product'}
        <section>
            <div class="image">
                {if $product['image'] > 0}
                    {image id=$product['image'] height="200" width="250"}
                {else}
                    <img src="/_gfx/no-image.png" height="200" width="250" />
                {/if}
            </div>
            <div class="product-list-info">{$product['name']}</div>
            <a href="/product/{$product['seo']}" class="product-link button blue">Product information</a>
        </section>
    {/foreach}
    <div class="pagination">
        {if $previousPage >= 0}
            {if isset($categorySeo)}
                <a href="/category/{$categorySeo}/page/{$previousPage}" class="button black">Previous</a>
            {elseif isset($brandSeo)}
                <a href="/brand/{$brandSeo}/page/{$previousPage}" class="button black">Previous</a>
            {else}
                <a href="/products/page/{$previousPage}" class="button black">Previous</a>
            {/if}
        {/if}
        {if $showMore}
            {if isset($categorySeo)}
                <a href="/category/{$categorySeo}/page/{$nextPage}" class="button black">Next</a>
            {elseif isset($brandSeo)}
                <a href="/brand/{$brandSeo}/page/{$nextPage}" class="button black">Next</a>
            {else}
                <a href="/products/page/{$nextPage}" class="button black">Next</a>
            {/if}
        {/if}
    </div>
{/if}
</div>

{include file="_footer.tpl"}