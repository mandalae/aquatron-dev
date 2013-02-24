{include file="_header.tpl" title="Login"}

{if isset($error) && $error}
<div class="infobox error">Username or password incorrect. Please check your spelling.</div>
{/if}

{include file="_footer.tpl"}