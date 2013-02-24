<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 05:28:33
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/imagedb/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107922248851123cce72f5a4-57118769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5e362fc73831aa94176346b126e53fbf3ccf72' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/imagedb/index.tpl',
      1 => 1360499309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107922248851123cce72f5a4-57118769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51123cce7e38e0_92511102',
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51123cce7e38e0_92511102')) {function content_51123cce7e38e0_92511102($_smarty_tpl) {?><?php if (!is_callable('smarty_function_imagedb')) include '/Users/skaa/Sites/aquatron.co.uk/_inc/Smarty/plugins/function.imagedb.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/imagedb/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"ImageDB"), 0);?>


<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
<div class="imageContainer">
<?php echo smarty_function_imagedb(array('id'=>$_smarty_tpl->tpl_vars['image']->value['id'],'height'=>"135",'width'=>"135"),$_smarty_tpl);?>

</div>
<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/imagedb/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>