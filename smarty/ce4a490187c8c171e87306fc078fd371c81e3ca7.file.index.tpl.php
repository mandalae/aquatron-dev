<?php /* Smarty version Smarty-3.1.12, created on 2013-02-06 05:18:33
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170949282250cf73a2131463-71823269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4a490187c8c171e87306fc078fd371c81e3ca7' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/index.tpl',
      1 => 1360086594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170949282250cf73a2131463-71823269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cf73a2161f68_44495664',
  'variables' => 
  array (
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cf73a2161f68_44495664')) {function content_50cf73a2161f68_44495664($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"News"), 0);?>


<?php echo $_smarty_tpl->tpl_vars['text']->value->getContent();?>


<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>