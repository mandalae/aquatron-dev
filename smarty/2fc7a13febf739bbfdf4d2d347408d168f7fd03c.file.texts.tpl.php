<?php /* Smarty version Smarty-3.1.12, created on 2013-02-05 10:51:40
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/texts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185775095250f3295362f6f2-08589576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc7a13febf739bbfdf4d2d347408d168f7fd03c' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/texts.tpl',
      1 => 1360086696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185775095250f3295362f6f2-08589576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f3295368f845_77281901',
  'variables' => 
  array (
    'headline' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f3295368f845_77281901')) {function content_50f3295368f845_77281901($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['headline']->value), 0);?>


<h1><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</h1>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>