<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/_css/style.css" type="text/css" media="screen, projection" />

    <title>Aquatron{if isset($title)} :: {$title}{/if}</title>
</head>
<body>

    <div id="page">
    
        <header id="top">
            <div id="logo">
                
            </div>
        </header>
        <nav>
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
                <li><a href="/register">Register</a></li>
                {if !$user->isLoggedIn()}
                <li class="list-item-login right">
                    <form method="post" action="/login">
                        <input type="hidden" value="{$smarty.server.REQUEST_URI}" name="returnUrl">
                        <input type="text" value="" name="email" class="js-formInput login-form-email" />
                        <input type="password" class="js-formInput login-form-password" name="password" />
                        <input type="submit" value="Login" class="button green box-shadow" />
                    </form>
                </li>
                {else}
                <li class="list-item-logout right">
                    <a href="/login?action=logout">Logout</a>
                </li>
                {if $user->getAcl() == $smarty.const.ACL_ADMIN}
                <li class="right">
                    <a href="/admin">Admin</a>
                </li>
                {/if}
                {/if}
            </ul>
        </nav>
        <div id="content">
            {if !$hideMenu}
            <nav id="menu">
                <ul>
                    {foreach $menuItems as $item}
                    <li><a href="/page/{$item['seo']}">{$item['headline']}</a></li>
                    {/foreach}
                    <li><a href="/staff">Meet the staff</a></li>
                </ul>
            </nav>
            {/if}
            <div id="mainContent">