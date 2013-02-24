<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 06:39:41
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/users/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655255653511767cc7f9926-07367217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28402460322ed57cb51b8b750e48f85c45ce13c6' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/users/edit.tpl',
      1 => 1360503580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655255653511767cc7f9926-07367217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511767cc83bac2_02405447',
  'variables' => 
  array (
    'user' => 0,
    'acl' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511767cc83bac2_02405447')) {function content_511767cc83bac2_02405447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_imagedb')) include '/Users/skaa/Sites/aquatron.co.uk/_inc/Smarty/plugins/function.imagedb.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Admin Users"), 0);?>


<h1>Edit user</h1>

<form method="post">

    <div class="form-element">
        <label for="email">Email/Username:</label>
        <input type="input" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
<?php }?>" name="email" id="email" />
    </div>

    <div class="form-element">
        <label for="acl">Access:</label>
        <select id="acl" name="acl">
            <option value="0">--- Select ---</option>
            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['option']->value['id']==$_smarty_tpl->tpl_vars['user']->value->getAcl()){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
            <?php } ?>
        </select>
    </div>
    
    <div class="breaker"></div>

    <div class="form-element">
        <label for="name">Name:</label>
        <input type="input" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
<?php }?>" name="name" id="name" />
    </div>
    
    <div class="form-element">
        <label for="address">Address:</label>
        <input type="input" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->getAddress();?>
<?php }?>" name="address" id="address" />
    </div>
    
    <div class="form-element">
        <label for="zipcode">Zipcode:</label>
        <input type="input" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->getZipcode();?>
<?php }?>" name="zipcode" id="zipcode" />
    </div>
    
    <div class="form-element">
        <label for="city">City:</label>
        <input type="input" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->getCity();?>
<?php }?>" name="city" id="city" />
    </div>
    
    <div class="form-element">
        <label for="image">Image:</label>
        <?php echo smarty_function_imagedb(array('id'=>$_smarty_tpl->tpl_vars['user']->value->getImage(),'name'=>"image"),$_smarty_tpl);?>

    </div>
    
    <div class="form-element">
        <label for="description">Description:</label>
        <textarea name="description" id="description"><?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->getDescription();?>
<?php }?></textarea>
    </div>
    
    <div class="form-element checkbox">
        <label for="active">Active:</label>
        <input type="checkbox" value="1" name="active" id="active"<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getActive()>0){?> checked="checked"<?php }?> />
    </div>
    
    <div class="form-element">
        <input type="submit" value="Save" class="submit" />
    </div>
    
</form>

<?php echo $_smarty_tpl->getSubTemplate ("admin/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>