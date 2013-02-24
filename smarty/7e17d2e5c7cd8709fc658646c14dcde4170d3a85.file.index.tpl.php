<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 03:24:56
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/users/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170381613951091d0e3fee13-38103416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e17d2e5c7cd8709fc658646c14dcde4170d3a85' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/users/index.tpl',
      1 => 1360491894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170381613951091d0e3fee13-38103416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51091d0e440949_15626100',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51091d0e440949_15626100')) {function content_51091d0e440949_15626100($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Admin Users"), 0);?>


<h1>Users</h1>

<a href="/admin/users/edit.php" class="button">Create new user</a>

<table class="data">
    <colgroup>
        <col></col>
        <col></col>
        <col></col>
        <col></col>
        <col></col>
        <col></col>
    </colgroup>
    <thead>
        <tr>
            <th>User name</th>
            <th>User group</th>
            <th>Email</th>
            <th>Active</th>
            <th>Deleted</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['aclName'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['user']->value['active']>0){?>Yes<?php }else{ ?>No<?php }?></td>
            <td><?php if ($_smarty_tpl->tpl_vars['user']->value['deleted']>0){?>Yes<?php }else{ ?>No<?php }?></td>
            <td><a href="/admin/users/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Edit</a> | <a href="/admin/users/?delete=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="js-confirm">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("admin/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>