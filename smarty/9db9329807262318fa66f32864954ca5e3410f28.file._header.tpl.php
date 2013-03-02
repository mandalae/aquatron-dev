<?php /* Smarty version Smarty-3.1.12, created on 2013-03-02 11:49:00
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/imagedb/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10026883895117870c8514f2-76322329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9db9329807262318fa66f32864954ca5e3410f28' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/imagedb/_header.tpl',
      1 => 1362250135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10026883895117870c8514f2-76322329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5117870c863826_09271832',
  'variables' => 
  array (
    'title' => 0,
    'selector' => 0,
    'multiple' => 0,
    'query' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5117870c863826_09271832')) {function content_5117870c863826_09271832($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/_js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/_js/main.js"></script>
    <script src="/_js/admin.js"></script>

    <script src="/_js/imagedb.js" type="text/javascript"></script>
    <script src="/_js/swfupload/swfupload.js" type="text/javascript"></script>
    <script src="/_js/swfupload/handlers.js" type="text/javascript"></script>

    <link rel="stylesheet" href="/_css/jquery.fancybox.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="/_css/admin/style.css" type="text/css" media="screen, projection" />

    <title>Aquatron<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> :: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></title>
</head>
<body>

    <script type="text/javascript">
        var selector = "<?php if (isset($_smarty_tpl->tpl_vars['selector']->value)){?><?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
<?php }?>";
        var multiple = "<?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)){?><?php echo $_smarty_tpl->tpl_vars['multiple']->value;?>
<?php }?>";
        var query = "<?php if (isset($_smarty_tpl->tpl_vars['query']->value)){?><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
<?php }?>";
    </script>

    <div id="top">
        
    </div>
    <div id="content">
        <div id="menu">
            <ul>
                <li><a href="/admin/imagedb?selector=<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
&multiple=<?php echo $_smarty_tpl->tpl_vars['multiple']->value;?>
&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">Browse images</a></li>
                <li><a href="/admin/imagedb/upload.php?selector=<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
&multiple=<?php echo $_smarty_tpl->tpl_vars['multiple']->value;?>
&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">Upload</a></li>
                <li><a href="#">Close window</a></li>
            </ul>
        </div>
        <div id="mainContent"><?php }} ?>