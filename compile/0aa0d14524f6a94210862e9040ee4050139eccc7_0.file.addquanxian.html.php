<?php
/* Smarty version 3.1.30, created on 2018-06-03 00:56:54
  from "C:\wamp64\www\mvcyyy\graduation\template\admin\addquanxian.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b133cd644e337_31906916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aa0d14524f6a94210862e9040ee4050139eccc7' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\admin\\addquanxian.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b133cd644e337_31906916 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h1>
<h3><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</h3>
<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" width="100px" height="100px">
<h6><?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>
</h6>
<p><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</p>
<form action="index.php?m=admin&f=contant&a=addquanxianCon&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" method="post">
    <label for="">普通<input type="radio" name="quanxian" value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['cquanxian'] == 0) {?>checked<?php }?>></label>
    <label for="">精品<input type="radio" name="quanxian" value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['cquanxian'] == 2) {?>checked<?php }?>></label>
    <label for="">极品<input type="radio" name="quanxian" value="3" <?php if ($_smarty_tpl->tpl_vars['v']->value['cquanxian'] == 3) {?>checked<?php }?>></label><br>
    <input type="submit" value="发布">
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
