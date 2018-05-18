<?php
/* Smarty version 3.1.30, created on 2017-11-13 05:32:40
  from "D:\wamp64\www\mvcyyy\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a092e78062b12_52385354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390ae660b85bf829fd7fae8ee089778ea31cdafd' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\admin\\login.html',
      1 => 1508852311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a092e78062b12_52385354 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="form">
    <form action="index.php" method="post">
        <div class="til">Welcome to JayLee's Blog</div>
        <div class="group" style="margin-top: 20px">
            <label for="user">USER：</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="user" type="text" id="user" placeholder="USER">
        </div>
        <div class="group">
            <label for="pasw">PASSWORD：</label><input name="pasw" type="password" id="pasw" placeholder="PASSWORD">
        </div>
        <div class="group">
            <label for="yan">验证码：</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="yan" type="text" id="yan" placeholder="验证">
            <img src="index.php?m=login&f=login&a=cod" align="middle" onclick="this.src='index.php?m=login&f=login&a=cod'">
        </div>
        <input type="hidden" name="m" value="login">
        <input type="hidden" name="f" value="login">
        <input type="hidden" name="a" value="check">
        <input type="submit">
    </form>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $('form').validate({
            rules:{
                user:{
                    required:true,
                    minlength:5,
                },
                pasw:{
                    required:true
                }
            },
            messages:{
                user:{
                    required:"NOT NULL",
                    minlength:"不得少于5个字符"
                },
                pasw:{
                    required:"密码不能为空"
                }
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
