{include file="admin/imagedb/_header.tpl" title="ImageDB"}

{foreach $images as $image}
<div class="imageContainer">
{imagedb id=$image['id'] height="135" width="135"}
</div>
{/foreach}

{include file="admin/imagedb/_footer.tpl"}