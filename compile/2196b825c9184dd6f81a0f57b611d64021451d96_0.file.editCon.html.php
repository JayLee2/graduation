<?php
/* Smarty version 3.1.30, created on 2018-04-18 12:37:36
  from "C:\wamp64\www\mvcyyy\template\index\editCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad73c10555f52_44679824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2196b825c9184dd6f81a0f57b611d64021451d96' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\template\\index\\editCon.html',
      1 => 1510473912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad73c10555f52_44679824 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_URL;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_URL;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_URL;?>
/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?f=addCon&a=editConCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&wid=<?php echo $_smarty_tpl->tpl_vars['wid']->value;?>
" method="post">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
" type="text" name="ctitle" class="form-control" id="exampleInputEmail1" placeholder="标题">
    </div>
    <div><?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;" name="con"><?php echo '</script'; ?>
></div>
    <textarea hidden><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</textarea>
    <div class="form-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
        <?php if (strpos($_smarty_tpl->tpl_vars['v']->value["pos"],$_smarty_tpl->tpl_vars['vv']->value["pid"]) !== false) {?>
        <label>
            <input type="checkbox" name="pos[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['pid'];?>
" checked><?php echo $_smarty_tpl->tpl_vars['vv']->value["pname"];?>

        </label>
        <?php } else { ?>
        <label>
            <input type="checkbox" name="pos[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['pid'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value["pname"];?>

        </label>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="">
    <div class="form-group photo">
        <input type="hidden" name="photo">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">价钱</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
" type="text" name="price">
    </div>
    <button type="submit" class="btn btn-default">提交</button>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</form>
</body>
</html>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
    function isFocus(e){
    alert(UE.getEditor('editor').isFocus());
    UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
    UE.getEditor('editor').blur();
    UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
    var value = prompt('插入html代码', '');
    UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
    enableBtn();
    UE.getEditor('editor');
    }
    function getAllHtml() {
    alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
    var arr = [];
    arr.push("使用editor.getContent()方法可以获得编辑器的内容");
    arr.push("内容为：");
    arr.push(UE.getEditor('editor').getContent());
    alert(arr.join("\n"));
    }
    function getPlainTxt() {
    var arr = [];
    arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
    arr.push("内容为：");
    arr.push(UE.getEditor('editor').getPlainTxt());
    alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
    var arr = [];
    arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
    UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
    alert(arr.join("\n"));
    }
    function setDisabled() {
    UE.getEditor('editor').setDisabled('fullscreen');
    disableBtn("enable");
    }

    function setEnabled() {
    UE.getEditor('editor').setEnabled();
    enableBtn();
    }

    function getText() {
    //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
    var range = UE.getEditor('editor').selection.getRange();
    range.select();
    var txt = UE.getEditor('editor').selection.getText();
    alert(txt)
    }

    function getContentTxt() {
    var arr = [];
    arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
    arr.push("编辑器的纯文本内容为：");
    arr.push(UE.getEditor('editor').getContentTxt());
    alert(arr.join("\n"));
    }
    function hasContent() {
    var arr = [];
    arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
    arr.push("判断结果为：");
    arr.push(UE.getEditor('editor').hasContents());
    alert(arr.join("\n"));
    }
    function setFocus() {
    UE.getEditor('editor').focus();
    }
    function deleteEditor() {
    disableBtn();
    UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
    var div = document.getElementById('btns');
    var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
    for (var i = 0, btn; btn = btns[i++];) {
    if (btn.id == str) {
    UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
    } else {
    btn.setAttribute("disabled", "true");
    }
    }
    }
    function enableBtn() {
    var div = document.getElementById('btns');
    var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
    for (var i = 0, btn; btn = btns[i++];) {
    UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
    }
    }

    function getLocalData () {
    alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
    UE.getEditor('editor').execCommand( "clearlocaldata" );
    alert("已清空草稿箱")
    }
    var obj=new upload();
    obj.createView({ parent:document.querySelector('.photo') });
    obj.change();
    obj.up(function (data) {
    document.querySelector('input[type=hidden]').value=data;
    });
    ue.addListener('ready',function(){
        ue.setContent(document.querySelector('textarea').value)
    })
<?php echo '</script'; ?>
><?php }
}
