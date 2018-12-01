<?php
/* Smarty version 3.1.30, created on 2018-05-31 07:52:34
  from "C:\wamp64\www\mvcyyy\graduation\template\admin\cat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0fa9c2e65d24_84731299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abe54f9d7aeb9e6ae82d83eaba9517801c2992bc' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\admin\\cat.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0fa9c2e65d24_84731299 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Form - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/icon.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div style="margin:20px 0;"></div>
<div class="easyui-panel" title="New Topic" style="width:100%;max-width:400px;padding:30px 60px;">
    <form id="ff" method="post" action="index.php?m=admin&f=cat&a=addCat">
        <a href="index.php?m=admin&f=cat&a=showCat">sss</a>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cname" style="width:100%" data-options="label:'分类名称:',required:true">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cinfo" style="width:100%;height:60px" data-options="label:'Message:',multiline:true">
        </div>
        <div style="margin:20px 0">
            <input class="easyui-combotree" data-options="url:'index.php?m=admin&f=cat&a=showCat',method:'get',required:true" style="width:200px;" name="pid">
        </div>
    </form>
    <div style="text-align:center;padding:5px 0">
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Submit</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">Clear</a>
    </div>
</div>
<?php echo '<script'; ?>
>
    function submitForm(){

        $('#ff').form('submit');
    }
    function clearForm(){
        $('#ff').form('clear');
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
