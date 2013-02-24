<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 06:43:06
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/brands/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148111655951092a6174d8e7-87205567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5d503b5bc93218fcdc8881e42b7005b3c5cdfd' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/brands/edit.tpl',
      1 => 1360499833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148111655951092a6174d8e7-87205567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51092a6176ddb4_64706277',
  'variables' => 
  array (
    'brand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51092a6176ddb4_64706277')) {function content_51092a6176ddb4_64706277($_smarty_tpl) {?><?php if (!is_callable('smarty_function_imagedb')) include '/Users/skaa/Sites/aquatron.co.uk/_inc/Smarty/plugins/function.imagedb.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Admin Brands"), 0);?>


<h1>Edit brand</h1>

<form method="post">

    <div class="form-element">
        <label for="name">Name:</label>
        <input type="input" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->getName();?>
" name="name" id="name" />
    </div>
    
    <div class="form-element">
        <label for="image">Image:</label>
        <?php echo smarty_function_imagedb(array('id'=>$_smarty_tpl->tpl_vars['brand']->value->getImage(),'name'=>"image"),$_smarty_tpl);?>

    </div>
    
    <div class="form-element checkbox">
        <label for="active">Active:</label>
        <input type="checkbox" value="1" name="active" id="active"<?php if ($_smarty_tpl->tpl_vars['brand']->value->getActive()>0){?> checked="checked"<?php }?> />
    </div>
    
    <div class="form-element">
        <input type="submit" value="Save" class="submit" />
    </div>
    
</form>

<?php echo $_smarty_tpl->getSubTemplate ("admin/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>