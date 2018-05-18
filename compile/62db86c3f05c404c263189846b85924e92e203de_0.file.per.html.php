<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:59:25
  from "D:\wamp64\www\mvcyyy\template\index\per.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe85d269122_43429507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62db86c3f05c404c263189846b85924e92e203de' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\index\\per.html',
      1 => 1510991835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a0fe85d269122_43429507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/per.css">
<link rel="stylesheet" href="<?php echo CSS_URL;?>
/styleNav.css">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-1.12.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/style.js"><?php echo '</script'; ?>
>

<div class="per">
    <main>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="info" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
            <div class="left">
                <div class="cirImg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="">
                </div>
            </div>
            <div class="right">
                <h1><?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>
</h1>
                <p class="jie">这是一个还没有简介的Pianker</p>
                <ul class="fensi">
                    <li>
                        <div class="num"><?php echo $_smarty_tpl->tpl_vars['fensi']->value;?>
</div>
                        <div class="fontNum">粉丝</div>
                    </li>
                    <li>
                        <div class="num"><?php echo $_smarty_tpl->tpl_vars['guanzhu']->value;?>
</div>
                        <div class="fontNum">关注</div>
                    </li>
                    <li>
                        <div class="num"><?php echo $_smarty_tpl->tpl_vars['fangke']->value;?>
</div>
                        <div class="fontNum">访客</div>
                    </li>
                </ul>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </main>
</div>
<div class="nav">
    <div class="nav_li">
        <ul style="font-size: 20px" class="tou">
            <li><a flag="fabu" href="">她发布的</a></li>
            <li><a flag="like" href="">她喜欢的</a></li>
            <li><a flag="huifu" href="">她回复的</a></li>
            <li><a flag="guanzhu" href="">她关注的</a></li>
        </ul>
    </div>
</div>
<div class="perInfo">
    <main>
        <ul class="readList">

        </ul>
    </main>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {
        $('.tou a').click(function () {
            var uid=$(".info").attr('uid')
            var attr=$(this).attr('flag');
            if (attr=='fabu'||'like'||'huifu'){
                $.ajax({
                    url:"index.php?f=per&a=action",
                    data:{ attr,uid },
                    type:"post",
                    dataType:"json",
                    success:function (e) {
                        $('.readList').empty();
                        var add=''
                        for(var i=0;i<e.length;i++){
                            var str=`
                     <li>
                <div class="readLeft">
                    <h4><a href="index.php?f=article&cid=${ e[i]['cid'] }">${ e[i].ctitle }</a></h4>
                    <h2>By / ${ e[i]['uname'] }</h2>
                    <div class="bor"></div>
                    <div class="con">
                        <p>${ e[i].con }</p>
                        <span><a href="">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        645次阅读 | 评论：11 | 喜欢：56
                    </div>
                </div>
                <div class="readRight">
                    <a href="">
                        <img src="${ e[i].thumb }" alt="" width="100%" height="100%">
                    </a>
                </div>
            </li>
                    `
                            add+=str;
                            $('.readList').html(add)
                        }

                    }
                })
            }
            if(attr=='guanzhu'){
                $.ajax({
                    url:"index.php?f=per&a=guanzhu",
                    data:{ uid },
                    type:"post",
                    dataType:"json",
                    success:function (e) {
                        $('.readList').empty();
                        var add='';
                        for(var i=0;i<e.length;i++){
                            var str=`
                                 <div class="people" style="float: left; margin-left: 20px">
                <img src="${ e[i]["photo"] }" alt="" width="80px" height="80px">
                <h3><a href="index.php?f=per&uname=${ e[i]["uname"] }">${ e[i]["nicheng"] }</a></h3>
                <div class="clear"></div>
                <div class="sma">
                    <p>${ e[i]["guanzhu"] }</p>
                    <p>关注</p>
                </div>
                <div class="sma">
                    <p>16</p>
                    <p>粉丝</p>
                </div>
                <div class="sma">
                    <p>16</p>
                    <p>发布文章</p>
                </div>
                <div class="clear"></div>
            </div>

`
                            add+=str;
                            $('.readList').html(add)
                        }
                        $('<div class="clear"></div>').appendTo('.readList')
                    }
                })
            }

            return false;
        })
    })
<?php echo '</script'; ?>
><?php }
}
