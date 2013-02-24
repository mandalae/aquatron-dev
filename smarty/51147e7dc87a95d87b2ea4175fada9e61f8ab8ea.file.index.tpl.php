<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 06:30:09
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/pages/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977289225510907c93c20e1-86804377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51147e7dc87a95d87b2ea4175fada9e61f8ab8ea' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/pages/index.tpl',
      1 => 1359552606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977289225510907c93c20e1-86804377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510907c93d7793_36537809',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510907c93d7793_36537809')) {function content_510907c93d7793_36537809($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Admin Pages"), 0);?>


<h1>Pages index</h1>

<a href="/admin/pages/edit.php" class="button">Create new page</a>

<table class="data">
    <colgroup>
        <col></col>
        <col></col>
        <col></col>
    </colgroup>
    <thead>
        <tr>
            <th>Page name</th>
            <th>Active</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['page']->value['headline'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['page']->value['active']>0){?>Yes<?php }else{ ?>No<?php }?></td>
            <td><a href="/admin/pages/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
">Edit</a> | <a href="/admin/pages/?delete=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" class="js-confirm">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("admin/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>