<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 04:33:46
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114521625050cf73a216d4d6-96094941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac2e78ba6af273c39b02da8bea681eeb858ed98c' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/_header.tpl',
      1 => 1360495803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114521625050cf73a216d4d6-96094941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cf73a217bcc6_53269805',
  'variables' => 
  array (
    'title' => 0,
    'brands' => 0,
    'brand' => 0,
    'user' => 0,
    'menuItems' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cf73a217bcc6_53269805')) {function content_50cf73a217bcc6_53269805($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/_css/style.css" type="text/css" media="screen, projection" />

    <title>Aquatron<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> :: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></title>
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
                        <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
                            <li><a href="/brand/<?php echo $_smarty_tpl->tpl_vars['brand']->value['seo'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</a></li>
                        <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php if (!$_smarty_tpl->tpl_vars['user']->value->isLoggedIn()){?>
                <li class="list-item-login right">
                    <form method="post" action="/login">
                        <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>
" name="returnUrl">
                        <input type="text" value="" name="email" class="js-formInput login-form-email" />
                        <input type="password" class="js-formInput login-form-password" name="password" />
                        <input type="submit" value="Login" class="button green" />
                    </form>
                </li>
                <?php }else{ ?>
                <li class="list-item-logout right">
                    <a href="/login?action=logout">Logout</a>
                </li>
                <li class="right">
                    <a href="/admin">Admin</a>
                </li>
                <?php }?>
            </ul>
        </div>
        <div id="content">
            <div id="menu">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li><a href="/page/<?php echo $_smarty_tpl->tpl_vars['item']->value['seo'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['headline'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div id="mainContent"><?php }} ?>