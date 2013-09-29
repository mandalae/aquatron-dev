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
                <a href="/"><img src="/_gfx/logo.gif" /></a>
            </div>
        </header>
        <nav>
            <ul id="topmenu">
                <li class="js-categoryButton">
                    <a href="/products">Products</a>
                    <div class="hidden overlay" id="category-overlay">
                        <ul>
                        {foreach $categories as $category}
                            <li><a href="/category/{$category['seo']}">{$category['name']}</a></li>
                        {/foreach}
                        </ul>
                    </div>
                </li>
                <li class="js-brandsButton">
                    <a href="/products">Manufacturers</a>
                    <div class="hidden overlay" id="brand-overlay">
                        <ul>
                        {foreach $brands as $brand}
                            <li><a href="/brand/{$brand['seo']}">{$brand['name']}</a></li>
                        {/foreach}
                        </ul>
                    </div>
                </li>
                <li class="js-aquatronButton">
                    <a href="/contact">Aquatron</a>
                    <div class="hidden overlay" id="aquatron-overlay">
                        <ul>
                            {foreach $menuItems as $item}
                            <li><a href="/page/{$item['seo']}">{$item['headline']}</a></li>
                            {/foreach}
                            <li><a href="/staff">Meet the staff</a></li>
                        </ul>
                    </div>
                </li>
                <li class="js-courseButton">
                    <a href="/courses">Dive Courses</a>
                    <div class="hidden overlay" id="course-overlay">
                        <ul>
                            {foreach $courses as $course}
                            <li><a href="/course/{$course['seo']}">{$course['headline']}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/offers">Special offers</a>
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
            {if $showTeaser}
            <div id="teaser">
                <ul>
                    {foreach $teasers as $teaser}
                        <li {if $teaser@index != 0}class="hidden"{/if}><a href="{$teaser['url']}">{image id=$teaser['image'] width="1060" height="250" crop=true}</a></li>
                    {/foreach}
                </ul>
            </div>
            {/if}
            <div id="fullContent">