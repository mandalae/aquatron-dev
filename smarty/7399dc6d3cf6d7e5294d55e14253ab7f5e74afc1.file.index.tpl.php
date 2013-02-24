<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 07:12:44
         compiled from "/Users/skaa/Sites/aquatron.co.uk/templates/admin/brands/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87500671151092a312ab826-17522184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7399dc6d3cf6d7e5294d55e14253ab7f5e74afc1' => 
    array (
      0 => '/Users/skaa/Sites/aquatron.co.uk/templates/admin/brands/index.tpl',
      1 => 1359555160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87500671151092a312ab826-17522184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51092a312ec4f7_45609677',
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51092a312ec4f7_45609677')) {function content_51092a312ec4f7_45609677($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Admin Brands"), 0);?>


<h1>Pages index</h1>

<a href="/admin/brands/edit.php" class="button">Create new brand</a>

<table class="data">
    <colgroup>
        <col></col>
        <col></col>
    </colgroup>
    <thead>
        <tr>
            <th>Brand name</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</td>
            <td><a href="/admin/brands/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
">Edit</a> | <a href="/admin/brands/?delete=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
" class="js-confirm">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("admin/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>