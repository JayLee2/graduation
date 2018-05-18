<?php
/* Smarty version 3.1.30, created on 2018-04-16 06:10:19
  from "D:\wamp\www\mvcyyy\template\index\lists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad43e4b750900_43848653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5776ff349d432ac5ac2211865820668877ddd2' => 
    array (
      0 => 'D:\\wamp\\www\\mvcyyy\\template\\index\\lists.html',
      1 => 1510372689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad43e4b750900_43848653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="index.php?f=addCon&a=add&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">添加内容</a>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <li style="float: left"><a href="index.php?f=addCon&a=editCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&wid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</a></li><button><a href="index.php?f=addCon&a=delCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&wid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">删除</a></button>
    <div style="clear: both;"></div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
</body>
</html><?php }
}
