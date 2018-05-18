<?php
/* Smarty version 3.1.30, created on 2018-05-04 08:36:17
  from "C:\wamp64\www\mvcyyy\template\admin\addUserRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aec1b81bb2005_99933761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972d25838353d0f774e3db9aa3245c685b856513' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\template\\admin\\addUserRole.html',
      1 => 1510213270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aec1b81bb2005_99933761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <style>
        html,body{
            width: 100%;
            height: 100%;
        }
        .b{
            width: 80%;
            margin: 20px auto;
        }
        .input-group{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="b">
    <form action="index.php?m=admin&f=userRole&a=addUserRoleCon" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">角色名称</label>
            <input type="text" name="rname" class="form-control" id="exampleInputEmail1" placeholder="角色名称">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">最少发布文章</label>
            <input type="text" name="rwen" class="form-control" id="exampleInputPassword1" placeholder="最少发布文章数量">
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="readl" value="0" checked>
                普通
            </label>
            <label>
                <input type="radio" name="readl"  value="2">
                精华
            </label>
            <label>
                <input type="radio" name="readl" value="3" >
                极品
            </label>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html><?php }
}
