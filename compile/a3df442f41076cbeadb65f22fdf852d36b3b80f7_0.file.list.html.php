<?php
/* Smarty version 3.1.30, created on 2018-04-15 03:48:04
  from "D:\wamp\www\mvcyyy\template\index\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2cb746285c9_53043678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3df442f41076cbeadb65f22fdf852d36b3b80f7' => 
    array (
      0 => 'D:\\wamp\\www\\mvcyyy\\template\\index\\list.html',
      1 => 1510987090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad2cb746285c9_53043678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/read.css">
<link rel="stylesheet" href="http://at.alicdn.com/t/font_453424_b1gzjr282unjnhfr.css">
<link rel="stylesheet" href="<?php echo CSS_URL;?>
/list.css">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
<main class="img">
    <div class="topImg">
        <div class="topImgMask">
            <h3>早安故事</h3>
            <h4>Story / 1061篇</h4>
        </div>
        <img src="<?php echo IMG_URL;?>
/list1.jpg" alt="">
    </div>
</main>
<div class="reading">
    <main>

        <div class="clear"></div>
        <div class="hotNew">
            <span><a href="">HOT</a></span>
            <span><a href="">NEW</a></span>
        </div>
        <ul class="readList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <div class="readLeft">
                    <h1><a class="con" href="index.php?m=index&f=article&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</a></h1>
                    <h2>By / <?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</h2>
                    <div class="bor"></div>
                    <div class="con">
                        <div><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</div>
                        <span><a href="index.php?m=index&f=article&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">VIEW ALL</a></span>
                    </div>
                    <div class="num">
                        645次阅读 | 评论：11 | 喜欢：56
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
