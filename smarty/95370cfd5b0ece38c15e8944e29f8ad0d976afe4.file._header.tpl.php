<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 07:11:04
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166044994510903f8887a79-83158010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95370cfd5b0ece38c15e8944e29f8ad0d976afe4' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/_header.tpl',
      1 => 1359555057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166044994510903f8887a79-83158010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510903f88a3801_02383976',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510903f88a3801_02383976')) {function content_510903f88a3801_02383976($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/admin/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/_js/main.js"></script>
    <script src="/_js/admin.js"></script>

    <link rel="stylesheet" href="/_css/admin/style.css" type="text/css" media="screen, projection" />

    <title>Aquatron<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> :: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></title>
</head>
<body>

    <div id="top">
        <ul class="adminLinks">
            <li><a href="/login.php?action=logout">Logout</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="menu">
            <ul>
                <li><a href="/admin/pages">Pages</a></li>
                <li><a href="/admin/users">Users</a></li>
                <li><a href="/admin/brands">Brands</a></li>
            </ul>
        </div>
        <div id="mainContent"><?php }} ?>