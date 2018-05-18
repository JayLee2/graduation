<?php
/* Smarty version 3.1.30, created on 2018-05-04 08:36:15
  from "C:\wamp64\www\mvcyyy\template\admin\showUserRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aec1b7fb69627_76682683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '409842c3561f8b8792955a5dbad6474aac203513' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\template\\admin\\showUserRole.html',
      1 => 1510213179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aec1b7fb69627_76682683 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
</head>
<body>
    <table class="table table-bordered">
        <tr>
            <th>角色名称</th>
            <th>发布文章数</th>
            <th>可阅读级别</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rwen'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['readl'] == 0) {?>
            <td>普通</td>
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['readl'] == 2) {?>
            <td>精华</td>
            <?php } else { ?>
            <td>极品</td>
            <?php }?>
            <td><a href="index.php?m=admin&f=userRole&a=delRole&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">删除</a><a href="">修改</a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</body>
</html><?php }
}
