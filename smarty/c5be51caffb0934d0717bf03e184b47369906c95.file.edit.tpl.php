<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 06:03:49
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/pages/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9800047195109127cdb0410-39504331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5be51caffb0934d0717bf03e184b47369906c95' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/pages/edit.tpl',
      1 => 1359551029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9800047195109127cdb0410-39504331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5109127cdef342_06702347',
  'variables' => 
  array (
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5109127cdef342_06702347')) {function content_5109127cdef342_06702347($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Admin"), 0);?>


<h1>Edit page</h1>

<form method="post">

    <div class="form-element">
        <label for="headline">Headline:</label>
        <input type="input" value="<?php echo $_smarty_tpl->tpl_vars['text']->value->getHeadline();?>
" name="headline" id="headline" />
    </div>

    <div class="form-element">
        <label for="contentEditor">Content:</label>
        <textarea name="contentEditor" id="contentEditor" class="editor"><?php echo $_smarty_tpl->tpl_vars['text']->value->getContent();?>
</textarea>
    </div>
    
    <div class="form-element checkbox">
        <label for="active">Active:</label>
        <input type="checkbox" value="1" name="active" id="active"<?php if ($_smarty_tpl->tpl_vars['text']->value->getActive()>0){?> checked="checked"<?php }?> />
    </div>
    
    <div class="form-element">
        <input type="submit" value="Save" class="submit" />
    </div>
    
</form>

<?php echo $_smarty_tpl->getSubTemplate ("admin/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>