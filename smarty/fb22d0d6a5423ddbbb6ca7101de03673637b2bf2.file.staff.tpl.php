<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 06:58:48
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/staff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8673127515117859a29e8d0-63136226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb22d0d6a5423ddbbb6ca7101de03673637b2bf2' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/staff.tpl',
      1 => 1360504725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8673127515117859a29e8d0-63136226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5117859a2b5cd0_07112619',
  'variables' => 
  array (
    'headline' => 0,
    'text' => 0,
    'userList' => 0,
    'staff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5117859a2b5cd0_07112619')) {function content_5117859a2b5cd0_07112619($_smarty_tpl) {?><?php if (!is_callable('smarty_function_image')) include '/Users/skaa/Sites/aquatron.co.uk/_inc/Smarty/plugins/function.image.php';
?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['headline']->value), 0);?>


<h1><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</h1>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<ul class="staff-list">
<?php if (isset($_smarty_tpl->tpl_vars['userList']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['staff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['staff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['staff']->key => $_smarty_tpl->tpl_vars['staff']->value){
$_smarty_tpl->tpl_vars['staff']->_loop = true;
?>
        <li>
            <h3><?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
</h3>
            <h5><em><?php echo $_smarty_tpl->tpl_vars['staff']->value['aclName'];?>
</em></h5>
            <div class="image"><?php echo smarty_function_image(array('id'=>$_smarty_tpl->tpl_vars['staff']->value['image'],'height'=>"200",'width'=>"250"),$_smarty_tpl);?>
</div>
            <div class="description"><?php echo nl2br($_smarty_tpl->tpl_vars['staff']->value['description']);?>
</div>
        </li>
    <?php } ?>
<?php }?>
</ul>


<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>