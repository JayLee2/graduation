<?php
/* Smarty version 3.1.30, created on 2018-05-30 06:11:51
  from "C:\wamp64\www\mvcyyy\graduation\template\index\error.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0e40a779df95_40554127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf54f4428cdb1934c1c6b105d89b08b5d49489d6' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\index\\error.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0e40a779df95_40554127 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>提示信息</title>
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">
    <style>
        .span10{
            position: absolute;
            height: 397px;
            top:0;
            left:0;
            right:0;
            bottom:0;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="demo-content">
    <div class="doc-content">
        <div class="row">
            <div class="span10">
                <div class="tips tips-large tips-warning">
                    <span class="x-icon x-icon-error">×</span>
                    <div class="tips-content">
                        <h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
                        <p class="auxiliary-text">
                            3秒后自动跳转
                        </p>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['prePage']->value;?>
">返回上一页</a>
                            <a href="index.php">返回首页</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script end -->
</div>
</body>
</html><?php }
}
