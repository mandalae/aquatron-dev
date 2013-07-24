{include file="admin/_header.tpl" title="Admin"}

<h1>Edit product</h1>

<form method="post">

    <div class="form-element">
        <label for="name">Name:</label>
        <input type="input" value="{$product->getName()}" name="name" id="name" />
    </div>
    
    <div class="form-element">
        <label for="name">Brand:</label>
        <select name="brand">
            <option>Select one</option>
            {foreach $brands as $brand}
                <option value="{$brand['id']}"{if $brand['id'] == $product->getBrand()} selected="selected"{/if}>{$brand['name']}</option>
            {/foreach}
        </select>
    </div>
    
    <div class="form-element checkbox">
        <label for="active">Active:</label>
        <input type="checkbox" value="1" name="active" id="active"{if $product->getActive() > 0} checked="checked"{/if} />
    </div>
    
    <div class="form-element">
        <input type="submit" value="Save" class="submit" />
    </div>
    
</form>

{include file="admin/_footer.tpl"}