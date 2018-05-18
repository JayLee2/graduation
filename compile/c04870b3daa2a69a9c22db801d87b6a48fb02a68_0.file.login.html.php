<?php
/* Smarty version 3.1.30, created on 2017-11-13 05:39:35
  from "D:\wamp64\www\mvcyyy\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a093017763aa3_09473668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c04870b3daa2a69a9c22db801d87b6a48fb02a68' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\index\\login.html',
      1 => 1510226508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a093017763aa3_09473668 (Smarty_Internal_Template $_smarty_tpl) {
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
/login-index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/login-index.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="contt">
        <div class="t">片刻</div>
        <div class="inp">
            <form class="denglu" action="index.php?m=index&f=login&a=check" method="post">
                <div class="from-group">
                    <input type="text" placeholder="邮箱" name="email">
                </div>
                <div class="from-group">
                    <input type="password" placeholder="密码" name="pass">
                </div>
                <img src="index.php?m=index&f=login&a=cod" alt=""  onclick="this.src='index.php?m=login&f=login&a=cod'">
                <div class="from-group">
                    <input type="text" placeholder="请输入验证码" name="code">
                </div>
                <div class="clear"></div>
                <span class="forget"><a href="">忘记密码？</a></span><br>
                <input type="submit" value="登陆" class="login">
                <input type="button" value="注册" class="reg">
            </form>
        </div>
        <ul class="other">
           <li><a href="">微博登陆</a></li>
           <li><a href="">QQ登陆</a></li>
           <li><a href="">微信登录</a></li>
        </ul>
    </div>
    <div class="contt2">
        <div class="t">片刻</div>
        <div class="inp">
            <form action="index.php?f=login&a=zhuce" method="post" class="zhuce">
                <div class="from-group">
                    <input type="email" placeholder="邮箱" name="email2">
                </div>
                <div class="from-group">
                    <input type="password" placeholder="密码" name="pas1" id="pas1">
                </div>
                <div class="from-group">
                    <input type="password" placeholder= "确认密码" name="pas2" id="pas2">
                </div>
                <img src="index.php?m=index&f=login&a=cod2" alt="" onclick="this.src='index.php?m=index&f=login&a=cod2'">
                <div class="from-group">
                    <input type="text" name="cod2">
                </div>
                <div class="clear"></div>
                <input type="submit" value="注册">
                <input type="button" value="取消" class="canl">
            </form>
        </div>
        <ul class="other">
            <li><a href="">微博登陆</a></li>
            <li><a href="">QQ登陆</a></li>
            <li><a href="">微信登录</a></li>
        </ul>
    </div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function () {
        $('.denglu').validate({
            rules:{
                email:{
                    required:true,
                    minlength:5,
                    email:true,

                },
                pass:{
                    required:true,
                    minlength:5,
                },
                code:{
                    required:true,
                }
            },
            messages:{
                email:{
                    required:"必须输入邮箱号码",
                    minlength:"输入长度不能小于5",
                    email:"必须输入正确的email格式"
                },
                pass:{
                    required:"必须输入密码",
                    minlength:"输入长度不能小于5"
                },
                code:{
                    required:"验证码必填"
                }
            }
        })
        $('.zhuce').validate({
            rules:{
                email2:{
                    email:true,
                    required:true,
                    rangelength:[5,16],
                    remote:{
                        url:"index.php?f=login&a=yibu",
                        type:"post"
                    }
                },
                pas1:{
                    required:true,
                    rangelength:[5,16],
                    equalTo:"#pas2"
                },
                pas2:{
                    required:true,
                    rangelength:[5,16],
                    equalTo:"#pas1"
                }
            },
            messages:{
                email2:{
                    email:"必须输入正确的email格式",
                    required:"邮箱不能为空",
                    rangelength:"必须是5-16位",
                    remote:"用户名已存在"
                },
                pas1:{
                    required:"密码不能为空",
                    rangelength:"必须是5-16位",
                    equalTo:"两次输入不一致"
                },
                pas2:{
                    required:"密码不能为空",
                    rangelength:"必须是5-16位",
                    equalTo:"两次输入不一致"
                }

            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
