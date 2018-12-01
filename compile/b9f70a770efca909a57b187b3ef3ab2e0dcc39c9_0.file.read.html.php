<?php
/* Smarty version 3.1.30, created on 2018-05-30 06:10:53
  from "C:\wamp64\www\mvcyyy\graduation\template\index\read.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0e406d8e8301_86756261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9f70a770efca909a57b187b3ef3ab2e0dcc39c9' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\index\\read.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5b0e406d8e8301_86756261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/read.css">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/read.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="http://at.alicdn.com/t/font_453424_b1gzjr282unjnhfr.css">
<main>
    <div class="banner">
        <main class="ban">
            <ul>
                <li class="now"><a href="">
                    <img src="<?php echo IMG_URL;?>
/banner1.JPG" alt="">
                </a></li>
                <li class="next"><a href="">
                    <img src="<?php echo IMG_URL;?>
/banner2.JPG" alt="">
                </a></li>
                <li><a href="">
                    <img src="<?php echo IMG_URL;?>
/banner3.JPG" alt="">
                </a></li>
                <li><a href="">
                    <img src="<?php echo IMG_URL;?>
/banner4.JPG" alt="">
                </a></li>
                <li><a href="">
                    <img src="<?php echo IMG_URL;?>
/banner5.JPG" alt="">
                </a></li>
                <li class="priv"><a href="">
                    <img src="<?php echo IMG_URL;?>
/banner6.JPG" alt="">
                </a></li>
            </ul>
        </main>
        <div class="banLeft icon-handoleft iconfont" style="font-size: 40px"></div>
        <div class="banRight icon-shouzhiyou iconfont" style="font-size: 40px"></div>
    </div>
</main>
<div class="reading">
    <main>
        <div class="title">
            <div class="squar"></div>
            <div class="fenlei">分类 | Classification</div>
        </div>
        <ul class="list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li><a href="index.php?f=lists&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">
                <img src="<?php echo IMG_URL;?>
/list1.jpg" alt="" width="100%" height="100%">
                <div class="mask"></div>
                <h3><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
</h3>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["count"];?>
</h4>
            </a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <div class="clear"></div>
        <div class="title">
            <div class="squar"></div>
            <div class="fenlei">热评文章</div>
        </div>
        <ul class="readList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotPing']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <div class="readLeft">
                    <h1><a href="index.php?f=article&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</a></h1>
                    <h2>By / 文杰</h2>
                    <div class="bor"></div>
                    <div class="con">
                        <div><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</div>
                        <span><a href="">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["hnum"];?>
次阅读 | 评论：<?php echo $_smarty_tpl->tpl_vars['v']->value["ping"];?>
 | 喜欢：<?php echo $_smarty_tpl->tpl_vars['v']->value["xi"];?>

                    </div>
                </div>
                <div class="readRight">
                    <a href="">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" width="100%" height="100%">
                    </a>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </main>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
