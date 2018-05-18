<?php
/* Smarty version 3.1.30, created on 2018-04-15 03:47:46
  from "D:\wamp\www\mvcyyy\template\index\article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2cb62b53b13_93104301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b609b505edadad7ea3c9a441ff6d5f6c6d5d03b' => 
    array (
      0 => 'D:\\wamp\\www\\mvcyyy\\template\\index\\article.html',
      1 => 1510998111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad2cb62b53b13_93104301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/article.css">
<link rel="stylesheet" href="http://at.alicdn.com/t/font_458523_winhwq7ptuwstt9.css">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1"><?php echo '</script'; ?>
>
<div class="contont">
    <main>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <main class="center" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" conid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
            <div class="leibie">自由写作</div>
            <h1 cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h1>
            <div class="next">
                <div class="cirImg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="">
                </div>
                <div class="author"><a href="index.php?f=per&uname=<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a></div>
                <div class="guanzhu" style="display: <?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</div>
                <div class="articleInfo">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>
 | 阅读时间：11min | 阅读次数<?php echo $_smarty_tpl->tpl_vars['data2']->value["hnum"]+1;?>

                </div>
            </div>
            <div class="clear"></div>
            <hr style="margin: 40px 0">
            <div class="contontCon">

                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt=""><br>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

                ——————————
                <br><br>
                <div class="zan"><?php echo $_smarty_tpl->tpl_vars['like']->value;?>
</div>
            </div>
        </main>

    </main>
</div>
<div class="liuyan">
    <main class="liuyan">
        <div class="liuyanTop">
            <div class="liuleft"></div>
            <div class="liuright">留言板</div>
        </div>
        <div class="clear"></div>
        <ul class="decr">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="clear"></div>
        <div class="jieshao">
            <div class="tou">
                <img src="<?php echo IMG_URL;?>
/w.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="say">
                <div class="small"></div>
                <div class="big">
                    当您驻足停留过，从此便注定我们的缘分。站在时间的尽头，我们已是朋友，前端的路上我再也不用一个人独自行走。
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="yan">
            <main>
                <div class="yanBig">
                    <div class="yuan2">
                        <?php if ($_smarty_tpl->tpl_vars['isLogin']->value == 'noLogin') {?>
                        <a href="index.php?f=login" class="login">登陆</a>
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" width="50px" height="50px" style="border-radius: 50%;display: block">
                        <?php }?>
                    </div>
                    <div class="yanSmall">
                        <textarea placeholder="说两句吧" class="no1"></textarea>
                        <div class="fontNum">还可以输入200字</div>
                        <div class="button" cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" author="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">畅聊一下</div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="ping">
                    <div class="pingLeft">评论</div>
                    <div class="pingRight">4239人参与评论，3605条评论</div>
                </div>
                <div class="clear"></div>
            </main>
        </div>
        <div class="liuCon">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['no1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="ban">
                <main>
                    <div class="newPing">
                        <div class="shu"></div>
                        <div class="newFont">最新评论</div>
                        <div class="clear"></div>
                        <ul class="pingList">
                            <li>
                                <div class="userImg">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="" width="100%" height="100%">
                                </div>
                                <div class="pingCont">
                                    <div class="userName"><?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>
</div>
                                    <div class="userCon"><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</div>
                                </div>
                                <div class="clear"></div>
                                <div class="huifu">
                                    <span uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" mid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
" class="repeatCon">回复</span><span class="icon-damuzhizhaoxia1 iconfont"></span><span class="icon-damuzhizhaoxia iconfont"></span>
                                </div>
                                <div class="next"></div>
                                <div class="clear"></div>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['son']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['son'], 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                                <div class="return">
                                    <span class="red"><?php echo $_smarty_tpl->tpl_vars['vv']->value["uname1"];?>
</span>：回复@<span class="red"><?php echo $_smarty_tpl->tpl_vars['vv']->value["uname2"];?>
</span>
                                    <div class="clear"></div>
                                    <p class="repeatCon"><?php echo $_smarty_tpl->tpl_vars['vv']->value["mcon"];?>
</p>
                                </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                </main>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>

    </main>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {
        //点击量的实现
        var data=$('h1').attr('cid');
        $.ajax({
            url:"index.php?f=article&a=hit",
            data:{ cid:data },
            type:"post",
            success:function (e) {
            }
        })
        //关注度的实现

        $('.guanzhu').click(function () {
            var uid=$('.center').attr('uid');
            var c=$('.guanzhu').html();
            $.ajax({
                url:"index.php?f=article&a=guanzhu",
                data:{ uid,c },
                type:"post",
                success:function (e) {
                    console.log(e)
                    if(e=='has'){
                        $('.guanzhu').html('取消关注')
                    }
                    if(e=='no'){
                        $('.guanzhu').html('关注')
                    }
                    if(e=='err'){
                        location.href='index.php?f=login'
                    }

                }
            })
        })
        //喜欢的实现
        $('.zan').click(function () {
            var conid=$('.center').attr('conid')
            var uid=$('.center').attr('uid')
            var c=$('.zan').html();
            $.ajax({
                url:"index.php?f=article&a=like",
                data:{ c,conid,uid },
                type:"post",
                success:function (e) {
                    console.log(e)
                    if(e=='has'){
                        $('.zan').html('取消喜欢')
                    }
                    if(e=='no'){
                        $('.zan').html('喜欢')
                    }
                    if(e=='err'){
                        location.href='index.php?f=login'
                    }
                    if (e=='qin'){
                        alert('亲，自己不能给自己点赞哟！')
                    }
                }
            })
        })
        //留言的实现
        $('.button').click(function () {
            var val=$('.no1').val();
            var cid=$(this).attr('cid');
            var author=$(this).attr('author');
            $.ajax({
                url:"index.php?f=message&a=level",
                type:"post",
                data:{ val,cid,author },
                dataType:"JSON",
                success:function (e) {
                    console.log(e)
                        $(`<div class="ban">
                <main>
                    <div class="newPing">
                        <div class="shu"></div>
                        <div class="newFont">最新评论</div>
                        <div class="clear"></div>
                        <ul class="pingList">
                            <li>
                                <div class="userImg">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" width="100%" height="100%">
                                </div>
                                <div class="pingCont">
                                    <div class="userName">${ e[0]["nicheng"] }</div>
                                    <div class="userCon">${ val }</div>
                                </div>
                                <div class="clear"></div>
                                <div class="huifu">
                                    <span uid="${ e[0]['uid'] }" cid="${ e[0]['cid'] }" mid="${ e[0]['mid'] }" class="repeatCon">回复</span><span class="icon-damuzhizhaoxia1 iconfont"></span><span class="icon-damuzhizhaoxia iconfont"></span>
                                </div>
                                <div class="next"></div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                </main>
            </div>`).prependTo('.liuCon')
                },
                error:function (e) {
                    alert('还没有登录');
                    location.href='index.php?f=login'
                }
            })
        })
    $('.liuCon').delegate('.repeatCon','click',function () {
        var that=this
        var uid=$(this).attr('uid')
        var cid=$(this).attr('cid')
        var mid=$(this).attr('mid')
        $.ajax({
            url:"index.php?f=message&a=repeat",
            type:"post",
            data:{ uid,cid,mid },
            dataType:"JSON",
            success:function (e) {
                console.log(e)
                $(`<div class="return">
                <span class="red">${ e.uname2 }</span>：回复@<span class="red">${ e.uname1 }</span>
                <div class="returnCon">
                    <div class="returnConCon">
                        <textarea class="no2" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="huifu">
                        <span uid=${ uid } cid=${ cid } mid="${ mid }" class="send">发送</span><span class="icon-damuzhizhaoxia1 iconfont"></span><span class="icon-damuzhizhaoxia iconfont"></span><span class="cancel">取消回复</span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            `).appendTo($(that).parent().parent())
            }
        })

    })
        $('.liuCon').delegate('.send','click',function () {
            var that=this;
            var uid=$(this).attr('uid')
            var cid=$(this).attr('cid')
            var mid=$(this).attr('mid')
            var val=$('.no2').parents('.returnCon').find('.no2').val();
            $.ajax({
                url:"index.php?f=message&a=ret",
                data:{ uid,cid,mid,val },
                type:"post",
                success:function (e) {
                    console.log(val)
                    $(`<p class="repeatCon">${ val }</p>`).appendTo($(that).parents('.return'))
                    $('.returnCon').detach();
                }
            })
        })
        $('.liuCon').delegate('.cancel','click',function () {
            $(this).parents('.return').detach()
        })

        })
<?php echo '</script'; ?>
><?php }
}
