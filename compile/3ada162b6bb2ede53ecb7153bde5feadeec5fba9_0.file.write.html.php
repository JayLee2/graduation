<?php
/* Smarty version 3.1.30, created on 2017-11-13 05:39:44
  from "D:\wamp64\www\mvcyyy\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a093020af6c46_51798409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ada162b6bb2ede53ecb7153bde5feadeec5fba9' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\index\\write.html',
      1 => 1510294745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5a093020af6c46_51798409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/write.css">
<div class="container">
    <div class="row">
        <div class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</div>
        <div class="col-md-10">
            <div class="o">选择相应的栏目进行文章编辑</div>
            <iframe src="" frameborder="0" width="100%" height="99%" name="right"></iframe>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(function () {
        $("li>div").click(function () {
            $('li>div').css({ "background":"transparent" })
            $(this).css({ "background":"#B89745" }).parent('li').find('ul').toggle(200);
        })
    })
<?php echo '</script'; ?>
><?php }
}
