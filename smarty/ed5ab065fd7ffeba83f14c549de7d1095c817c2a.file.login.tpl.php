<?php /* Smarty version Smarty-3.1.12, created on 2013-01-25 08:15:39
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19812451265102a19bad0760-54062619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5ab065fd7ffeba83f14c549de7d1095c817c2a' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/login.tpl',
      1 => 1359126719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19812451265102a19bad0760-54062619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5102a19baf0026_58723309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5102a19baf0026_58723309')) {function content_5102a19baf0026_58723309($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Login"), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value){?>
<div class="infobox error">Username or password incorrect. Please check your spelling.</div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>