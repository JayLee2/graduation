<?php
/* Smarty version 3.1.30, created on 2018-05-30 06:43:35
  from "C:\wamp64\www\mvcyyy\graduation\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0e48175ed120_49877069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28cd028bd051de8fa669b52ac018545c01193ef' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\index\\write.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5b0e48175ed120_49877069 (Smarty_Internal_Template $_smarty_tpl) {
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
