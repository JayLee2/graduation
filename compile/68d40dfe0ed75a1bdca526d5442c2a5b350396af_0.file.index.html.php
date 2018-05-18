<?php
/* Smarty version 3.1.30, created on 2018-05-18 09:31:26
  from "D:\wamp\www\mvcyyy\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afe9d6ef07991_65070100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68d40dfe0ed75a1bdca526d5442c2a5b350396af' => 
    array (
      0 => 'D:\\wamp\\www\\mvcyyy\\template\\index\\index.html',
      1 => 1526632777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5afe9d6ef07991_65070100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bigTop">
    <main class="next">
        <div class="picBox">
            <div class="pic">
                <img src="<?php echo IMG_URL;?>
/j1.jpg" alt="">
            </div>
            <div class="pic">
                <img src="<?php echo IMG_URL;?>
/j2。jpg.jpg" alt="">
            </div>
            <div class="pic">
                <img src="<?php echo IMG_URL;?>
/j4.jpg" alt="">
            </div>
            <div class="pic">
                <img src="<?php echo IMG_URL;?>
/j3.jpg" alt="">
            </div>
            <div class="pic">
                <img src="<?php echo IMG_URL;?>
/j5.jpg" alt="">
            </div>
        </div>
        <div class="clear"></div>
        <div class="title">
            <div class="heiBox"></div>
            <div class="titCon">最新发布 | New Read</div>
        </div>
        <div class="clear"></div>
        <ul class="readList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <div class="readLeft">
                    <h1><a href="index.php?f=article&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</a></h1>
                    <h2>By / <a href="index.php?f=per&uname=<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a></h2>
                    <div class="bor"></div>
                    <div class="con">
                        <div class="conconcon"><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</div>
                        <span><a href="">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        <?php if ($_smarty_tpl->tpl_vars['v']->value["hnum"]) {
echo $_smarty_tpl->tpl_vars['v']->value["hnum"];
} else { ?>0<?php }?>次阅读 | 评论：11 | 喜欢：<?php echo $_smarty_tpl->tpl_vars['v']->value["like"];?>

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
        <div class="title">
            <div class="heiBox"></div>
            <div class="titCon">热门文章</div>
        </div>
        <div class="clear"></div>
        <ul class="ting">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <div class="tingPic">
                    <a href="index.php?m=index&f=article&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="">
                    </a>
                </div>
                <div class="tingCon">
                    <div class="tingTitle">
                        <a href="index.php?f=article&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</a>
                    </div>
                    <div class="tingAuthor">
                        作者 / <a href="index.php?f=per&uname=<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
                    </div>
                    <div class="tingConCon">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

                    </div>
                    <div class="num2">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["hnum"];?>
次阅读 | 评论：11 | 喜欢：<?php echo $_smarty_tpl->tpl_vars['v']->value["like"];?>

                    </div>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <div class="title">
            <div class="heiBox"></div>
            <div class="titCon">阅读 | Read</div>
        </div>
        <div class="clear"></div>
        <ul class="readList">
            <li>
                <div class="readLeft">
                    <h1>步履不停| Dream It Possible</h1>
                    <h2>By / <a href="index.php?f=per">文杰</a></h2>
                    <div class="bor"></div>
                    <div class="con">
                        恍恍惚惚的又过完了一岁，没什么值得说出口的成就，一年365天好像有360天都重复着同样的平凡和孤独。甚至经常性地陷入某种迷茫和困惑。生活有时一塌糊涂，有时平淡无
                        <span><a href="">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        645次阅读 | 评论：11 | 喜欢：56
                    </div>
                </div>
                <div class="readRight">
                    <a href="">
                        <img src="<?php echo IMG_URL;?>
/0.jpg" alt="" width="100%" height="100%">
                    </a>
                </div>
            </li>
            <li>
                <div class="readLeft">
                    <h1>步履不停| Dream It Possible</h1>
                    <h2>By / 文杰</h2>
                    <div class="bor"></div>
                    <div class="con">
                        恍恍惚惚的又过完了一岁，没什么值得说出口的成就，一年365天好像有360天都重复着同样的平凡和孤独。甚至经常性地陷入某种迷茫和困惑。生活有时一塌糊涂，有时平淡无
                        <span><a href="">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        645次阅读 | 评论：11 | 喜欢：56
                    </div>
                </div>
                <div class="readRight">
                    <a href="">
                        <img src="<?php echo IMG_URL;?>
/0.jpg" alt="" width="100%" height="100%">
                    </a>
                </div>
            </li>
            <li>
                <div class="readLeft">
                    <h1>步履不停| Dream It Possible</h1>
                    <h2>By / 文杰</h2>
                    <div class="bor"></div>
                    <div class="con">
                        恍恍惚惚的又过完了一岁，没什么值得说出口的成就，一年365天好像有360天都重复着同样的平凡和孤独。甚至经常性地陷入某种迷茫和困惑。生活有时一塌糊涂，有时平淡无
                        <span><a href="">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        645次阅读 | 评论：11 | 喜欢：56
                    </div>
                </div>
                <div class="readRight">
                    <a href="">
                        <img src="<?php echo IMG_URL;?>
/0.jpg" alt="" width="100%" height="100%">
                    </a>
                </div>
            </li>
        </ul>
    </main>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
