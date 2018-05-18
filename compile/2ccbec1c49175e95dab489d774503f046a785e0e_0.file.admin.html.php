<?php
/* Smarty version 3.1.30, created on 2017-11-13 05:32:48
  from "D:\wamp64\www\mvcyyy\template\admin\admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a092e7ff423c4_66200607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ccbec1c49175e95dab489d774503f046a785e0e' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\admin\\admin.html',
      1 => 1510386867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a092e7ff423c4_66200607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/admin.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_456519_dc2ylkemp132qpvi.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/prefixfree.min.js"><?php echo '</script'; ?>
>
    <title>Document</title>
    <style class="cp-pen-styles">body {
        background: radial-gradient(200% 100% at bottom center, #0070aa, #0b2570, #000035, #000);
        background: radial-gradient(220% 105% at top center, #000 10%, #000035 40%, #0b2570 65%, #0070aa);
        background-attachment: fixed;
        overflow: hidden;
    }

    @keyframes rotate {
        0% {
            transform: perspective(400px) rotateZ(20deg) rotateX(-40deg) rotateY(0);
        }
        100% {
            transform: perspective(400px) rotateZ(20deg) rotateX(-40deg) rotateY(-360deg);
        }
    }
    .stars {
        transform: perspective(500px);
        transform-style: preserve-3d;
        position: absolute;
        bottom: 0;
        perspective-origin: 50% 100%;
        left: 50%;
        animation: rotate 90s infinite linear;
    }

    .star {
        width: 2px;
        height: 2px;
        background: #F7F7B6;
        position: absolute;
        top: 0;
        left: 0;
        transform-origin: 0 0 -300px;
        transform: translate3d(0, 0, -300px);
        backface-visibility: hidden;
    }
    </style>

</head>
<body>
<header>
    <div class="home"><i class="icon-weibiaoti2 iconfont"></i></div>
    <div class="return headBtn"><a href="index.php">返回首页</a></div>
    <div class="exit headBtn"><a href="index.php?m=login&f=login">退出登录</a></div>
    <div class="user headBtn"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</div>
    <div class="help headBtn">帮助与文档</div>
    <div class="sou headBtn"><i class="icon-sousuo iconfont"></i>搜索</div>
</header>
<div class="asideBig">
    <div class="asideSmall">
        <div class="aside_top"><i class="icon-mianbaoxiedaohangxiaoxian iconfont"></i></div>
        <ul class="asideNav">
            <li>
                <a href="">
                    <i class="iconfont icon-shangjiantou1 icon-xiajiantou"></i>管理员管理
                </a>
                <ul class="list">
                    <li><a href="index.php?m=admin&f=member" target="right"><i class="iconfont icon-ren"></i>账号管理</a></li>
                    <li><a href="index.php?m=admin&f=level" target="right"><i class="iconfont icon-jibielingdai"></i>级别管理</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="iconfont icon-shangjiantou1 icon-xiajiantou"></i>用户管理
                </a>
                <ul class="list">
                    <li><a href="index.php?m=admin&f=showUser" target="right"><i class="iconfont icon-ren "></i>账号管理</a></li>
                    <li>
                        <a href=""><i class="iconfont icon-fabiao"></i>用户角色管理</a>
                        <ul class="list">
                            <li><a href="index.php?m=admin&f=userRole" target="right"><i class="iconfont icon-ren "></i>查看角色</a></li>
                            <li><a href="index.php?m=admin&f=userRole&a=addUserRole" target="right"><i class="iconfont icon-ren "></i>添加角色</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="iconfont icon-liuyan-copy"></i>用户留言管理</a></li>
                    <li><a href=""><i class="iconfont icon-jiaose"></i>发表内容管理</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="iconfont icon-shangjiantou1 icon-xiajiantou"></i>分类管理
                </a>
                <ul class="list">
                    <li><a href="index.php?m=admin&f=cat" target="right"><i class="iconfont icon-ren "></i>添加分类</a></li>
                    <li><a href="index.php?m=admin&f=cat&a=showCate" target="right"><i class="iconfont icon-ren "></i>查看分类</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="iconfont icon-shangjiantou1 icon-xiajiantou"></i>内容管理
                </a>
                <ul class="list">
                    <li><a href="index.php?m=admin&f=contant&a=showCon" target="right"><i class="iconfont icon-ren "></i>查看内容</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="iconfont icon-shangjiantou1 icon-xiajiantou"></i>用户支付管理
                </a>
            </li>
            <li>
                <a href="">
                    <i class="iconfont icon-shangjiantou1 icon-xiajiantou"></i>推荐位管理
                </a>
                <ul class="list">
                    <li><a href="index.php?m=admin&f=cat&a=pos" target="right"><i class="iconfont icon-ren"></i>推荐位</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
<iframe src="" frameborder="0" name="right"></iframe>
<div class="contont">
    <div class="topDian"></div>


    <div class="stars">
    </div>
    <?php echo '<script'; ?>
 src='<?php echo JS_URL;?>
/stopExecutionOnTimeout.js'><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var stars = 800;
            var $stars = $('.stars');
            var r = 800;
            for (var i = 0; i < stars; i++) {
                if (window.CP.shouldStopExecution(1)) {
                    break;
                }
                var $star = $('<div/>').addClass('star');
                $stars.append($star);
            }
            window.CP.exitedLoop(1);
            $('.star').each(function () {
                var cur = $(this);
                var s = 0.2 + Math.random() * 1;
                var curR = r + Math.random() * 30;
                cur.css({
                    transformOrigin: '0 0 ' + curR + 'px',
                    transform: ' translate3d(0,0,-' + curR + 'px) rotateY(' + Math.random() * 360 + 'deg) rotateX(' + Math.random() * -50 + 'deg) scale(' + s + ',' + s + ')'
                });
            });
        });

    <?php echo '</script'; ?>
>
    <div class="con">
        <div class="conLeft">
            <span class="hours"></span>:<span class="min"></span>:<span class="sec"></span>
        </div>
        <div class="conRight">
            <p></p>
            <div><span class="year"></span>年<span class="month"></span>月<span class="day"></span>日</div>
        </div>

    </div>
    <div class="push">PUSH</div>
</div>
<div class="con2">welcome</div>
</body>
</html><?php }
}
