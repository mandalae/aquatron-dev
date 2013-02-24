<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/_css/style.css" type="text/css" media="screen, projection" />

    <title>Aquatron{if isset($title)} :: {$title}{/if}</title>
</head>
<body>

    <div id="page">
    
        <div id="top">
            <ul id="topmenu">
                <li><a href="/">Shop</a></li>
                <li class="js-brandsButton">
                    <a href="/">Brands</a>
                    <div class="hidden" id="brand-overlay">
                        <ul>
                        {foreach $brands as $brand}
                            <li><a href="/brand/{$brand['seo']}">{$brand['name']}</a></li>
                        {/foreach}
                        </ul>
                    </div>
                </li>
                {if !$user->isLoggedIn()}
                <li class="list-item-login right">
                    <form method="post" action="/login">
                        <input type="hidden" value="{$smarty.server.REQUEST_URI}" name="returnUrl">
                        <input type="text" value="" name="email" class="js-formInput login-form-email" />
                        <input type="password" class="js-formInput login-form-password" name="password" />
                        <input type="submit" value="Login" class="button green" />
                    </form>
                </li>
                {else}
                <li class="list-item-logout right">
                    <a href="/login?action=logout">Logout</a>
                </li>
                <li class="right">
                    <a href="/admin">Admin</a>
                </li>
                {/if}
            </ul>
        </div>
        <div id="content">
            <div id="menu">
                <ul>
                    {foreach $menuItems as $item}
                    <li><a href="/page/{$item['seo']}">{$item['headline']}</a></li>
                    {/foreach}
                </ul>
            </div>
            <div id="mainContent">