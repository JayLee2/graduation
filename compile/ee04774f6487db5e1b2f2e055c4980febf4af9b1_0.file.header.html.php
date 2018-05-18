<?php
/* Smarty version 3.1.30, created on 2017-11-18 08:29:41
  from "D:\wamp64\www\mvcyyy\template\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fef75626a58_24550319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee04774f6487db5e1b2f2e055c4980febf4af9b1' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\header.html',
      1 => 1510993771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fef75626a58_24550319 (Smarty_Internal_Template $_smarty_tpl) {
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
/header.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/index.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/footer.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_453228_ovvuktljwqyw4s4i.css">
</head>
<body>
<header>
    <main>
        <div class="head-logo">
            <a href="index.php"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="index.php?f=read">阅读</a></li>
                <li><a href="">电台</a></li>
                <li><a href="">碎片</a></li>
                <li><a href="">客户端</a></li>
            </ul>
        </nav>
        <div class="headRight">
            <div class="edit">
                <a href="index.php?m=index&f=write">
                    <img src="<?php echo IMG_URL;?>
/edit-icon.png" alt="" width="70%" height="70%">
                </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['session']->value == '2') {?>
            <div class="loginBox">
                <a href="index.php?f=login">登陆&nbsp;/&nbsp;注册</a>
            </div>
            <?php } else { ?>
            <div class="userImg">
                <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="">
                <ul class="set">
                    <li><a href="index.php?f=myself">修改信息</a></li>
                    <li><a href="index.php?f=per&uname=<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
">个人中心</a></li>
                    <li><a href="index.php?m=index&f=login">切换账户</a></li>
                    <li><a href="index.php?m=index&f=login&a=outlogin">退出登陆</a></li>
                </ul>
            </div>
            <?php }?>
        </div>
    </main>
</header>
<?php echo '<script'; ?>
>
    $(function () {
        $('.userImg').click(function () {
            $('.set').toggle()
            }
        )
    })
<?php echo '</script'; ?>
>
<?php }
}
