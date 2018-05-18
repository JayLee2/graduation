<?php
/* Smarty version 3.1.30, created on 2017-11-14 06:36:59
  from "D:\wamp64\www\mvcyyy\template\admin\showCate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a8f0b5e0820_50147993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475257438021897e4f109a7f64cd922572f935c3' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\admin\\showCate.html',
      1 => 1510045804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0a8f0b5e0820_50147993 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editable TreeGrid - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/icon.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div style="margin:20px 0;">
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="edit()">Edit</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="save()">Save</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="cancel()">Cancel</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="del()">delete</a>
</div>
<table id="tg" class="easyui-treegrid" title="Editable TreeGrid" style="width:700px;height:250px"
       data-options="
				iconCls: 'icon-ok',
				rownumbers: true,
				animate: true,
				collapsible: true,
				fitColumns: true,
				url: 'index.php?m=admin&f=cat&a=category',
				method: 'get',
				idField: 'id',
				treeField: 'cname',
				showFooter: true
			">
    <thead>
    <tr>
        <th data-options="field:'cname',width:60,editor:'text',align:'center'">分类名称</th>
        <th data-options="field:'cinfo',width:180,align:'center',editor:'text'">分类简介</th>
    </tr>
    </thead>
</table>
<?php echo '<script'; ?>
 type="text/javascript">
    function formatProgress(value){
        if (value){
            var s = '<div style="width:100%;border:1px solid #ccc">' +
                '<div style="width:' + value + '%;background:#cc0000;color:#fff">' + value + '%' + '</div>'
            '</div>';
            return s;
        } else {
            return '';
        }
    }
    var editingId;
    function edit(){
        if (editingId != undefined){
            $('#tg').treegrid('select', editingId);
            return;
        }
        var row = $('#tg').treegrid('getSelected');
        if (row){
            editingId = row.id
            $('#tg').treegrid('beginEdit', editingId);
        }
    }
    $('#tg').treegrid({ 'onAfterEdit':function (a,b) {
        var obj={};
        obj.cid=editingId;
        for(var i in b){
            obj.field=i;
            obj.val=b[i];
        }
        $.ajax({
            url:'index.php?m=admin&f=cat&a=editFenlei',
            data:obj,
            type:'post',
            success:function (e) {
                if(e=='ok'){
                    alert('更新成功');
                }else if(e=='oy'){
                    alert('更新不成功');
                }
            }
        })
    }})
    function save(){
        if (editingId != undefined){
            var t = $('#tg');
            t.treegrid('endEdit', editingId);
            editingId = undefined;
        }
    }
    function cancel(){
        if (editingId != undefined){
            $('#tg').treegrid('cancelEdit', editingId);
            editingId = undefined;
        }
    }
    function del() {
        var row = $('#tg').treegrid('getSelected');
        if (row){
            editingId = row.id
        }
        if (editingId != undefined){
            $.ajax({
                url:'index.php?m=admin&f=cat&a=delFenlei',
                data:{ cid:editingId },
                type:'post',
                success:function (e) {
                    if(e=='ok'){
                        alert('删除成功');

                    }else{
                        alert('删除不成功');
                    }
                }
            })
            $('#tg').treegrid('remove', editingId);
            editingId = undefined;
        }
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
