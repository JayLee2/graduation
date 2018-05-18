<?php
/* Smarty version 3.1.30, created on 2018-04-18 11:08:02
  from "C:\wamp64\www\mvcyyy\template\admin\showCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad7271227f555_07262078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551b7ddfc53800edc06555da6e417c810bb9c4d0' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\template\\admin\\showCon.html',
      1 => 1510476559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad7271227f555_07262078 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <title>Document</title>
</head>
<body>
<a href="index.php?m=admin&f=contant&a=showCon">所有文章</a>
<a href="index.php?m=admin&f=contant&a=showCon&state=3">查询发布的文章</a>
<a href="index.php?m=admin&f=contant&a=showCon&state=2">查询审核的文章</a>
<a href="index.php?m=admin&f=contant&a=showCon&type=0">普通</a>
<a href="index.php?m=admin&f=contant&a=showCon&type=2">精华</a>
<a href="index.php?m=admin&f=contant&a=showCon&type=3">极品</a>
<table class="table table-bordered">
    <tr>
        <th>标题</th>
        <th>账户</th>
        <th>缩略图</th>
        <th>推荐位</th>
        <th>所属分类</th>
        <th>权限</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" width="50px" height="50px"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['v']->value["cquanxian"] == 0) {?>
        <td>普通</td>
        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["cquanxian"] == 2) {?>
        <td>精华</td>
        <?php } else { ?>
        <td>极品</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value["state"] == 1) {?>
        <td>保存</td>
        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 2) {?>
        <td>审核</td>
        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 3) {?>
        <td>发布</td>
        <?php }?>
        <td><a href="index.php?m=admin&f=contant&a=addquanxian&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">编辑</a></td>
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
