<?php
/* Smarty version 3.1.30, created on 2018-04-18 11:50:13
  from "C:\wamp64\www\mvcyyy\template\index\success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad730f5be6721_15601433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851243a9b67e75f7a040bdfadc96e48ced825e0a' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\template\\index\\success.html',
      1 => 1510564828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad730f5be6721_15601433 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>提示信息</title>
    <!-- 此文件为了显示Demo样式，项目中不需要引入 -->
    <link href="../../assets/code/demo.css" rel="stylesheet">

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>
<body>
<div class="demo-content">
    <div class="doc-content">
        <div class="row">
            <div class="span10">
                <div class="tips tips-large tips-success">
                    <span class="x-icon x-icon-success"><i class="icon icon-ok icon-white"></i></span>
                    <div class="tips-content">
                        <h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
                        <p class="auxiliary-text">
                            3秒之后跳转到
                        </p>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['prePage']->value;?>
">返回上一页</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

    </div>

    <!-- script end -->
</div>
</body>
</html><?php }
}
