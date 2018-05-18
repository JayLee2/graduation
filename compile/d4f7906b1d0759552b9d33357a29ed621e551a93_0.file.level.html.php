<?php
/* Smarty version 3.1.30, created on 2017-12-08 06:19:59
  from "D:\wamp64\www\mvcyyy\template\admin\level.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a2f0fa24755_93112682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f7906b1d0759552b9d33357a29ed621e551a93' => 
    array (
      0 => 'D:\\wamp64\\www\\mvcyyy\\template\\admin\\level.html',
      1 => 1510236362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a2f0fa24755_93112682 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>
<body>
<div class="demo-content">
    <div class="row">
        <div class="span16">
            <div id="grid">

            </div>
        </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
        <form class="form-horizontal" method="post">
            <div class="row">
                <input type="hidden" name="lid">
                <div class="control-group span8 ">
                    <label class="control-label">级别：</label>
                    <div class="controls">
                        <input name="lname" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">内容权限</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'添加',value:'1'},{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查找',value:'4' }] }">
                        <input type="hidden" name="connum">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">留言权限</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'添加',value:'1'},{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查找',value:'4' }] }">
                        <input type="hidden" name="messagenum">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">管理员权限</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'添加',value:'1'},{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查找',value:'4' }] }">
                        <input type="hidden" name="adminnum">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">用户管理权限</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'添加',value:'1'},{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查找',value:'4' }] }">
                        <input type="hidden" name="usernum">
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/config.js"><?php echo '</script'; ?>
>

    <!-- script start -->
    <?php echo '<script'; ?>
 type="text/javascript">
        BUI.use(['bui/grid','bui/data'],function(Grid,Data){
            var Grid = Grid,
                Store = Data.Store,
                enumObj = { "1" : "增加","2" : "删除","3" : "修改","4":"查询" },
                columns = [
                    { title : 'id',dataIndex :'lid' }, //editor中的定义等用于 BUI.Form.Field.Text的定义
                    { title : '级别', dataIndex :'lname' },
                    { title : '内容权限',dataIndex :'connum',renderer : Grid.Format.multipleItemsRenderer(enumObj) },
                    { title : '留言权限',dataIndex : 'messagenum',renderer : Grid.Format.multipleItemsRenderer(enumObj) },
                    { title : '管理员权限',dataIndex : 'adminnum',renderer : Grid.Format.multipleItemsRenderer(enumObj) },
                    { title : '用户管理权限',dataIndex : 'usernum',renderer : Grid.Format.multipleItemsRenderer(enumObj) },
                    { title : '操作',renderer : function(){
                        return '<span class="grid-command btn-edit">编辑</span>'
                    } }
                ];

            var editing = new Grid.Plugins.DialogEditing({
                    contentId : 'content', //设置隐藏的Dialog内容
                    triggerCls : 'btn-edit', //触发显示Dialog的样式
                    editor : {
                        title: '编辑',
                        success : function(){
                            var edtor = this,
                                form = edtor.get('form'),
                                editType = editing.get('editType'),//add 或者 edit
                                url = '';
                            if(editType == 'add'){ //可以根据编辑类型决定url
                                url = 'index.php?m=admin&f=level&a=addUser';
                            }else{
                                url = 'index.php?m=admin&f=level&a=editUser';
                            }
                            //检验
                            form.valid();
                            if(form.isValid()){
                                form.ajaxSubmit({ //表单异步提交
                                    url : url,
                                    type:"post",
                                    data:form.serializeToObject(),
                                    dataType:"text",
                                    success : function(data){
                                        if(editType == 'add'){
                                            form.setFieldValue('lid',data);
                                            edtor.accept();
                                        }else{
                                            console.log(data)
                                            edtor.accept();
                                        }
                                        //将a 改成 1 测试一下显示错误
                                        if(data.hasError){
                                            //返回的数据是 { hasError : fasle,error : 'xxxx',field : 'xxx' },也可以是任意格式的数据如 ： { success : false,'error' : 'xxxxx' }
                                            var field = data.field;
                                            form.getField(field).showErrors([data.error]); //也可以多个字段的错误信息 例如 errors : [{ field : 'a',error: 'addd' },{ field : 'a',error: 'addd' }]
                                        }else{

                                        }

                                    },
                                    error : function(){
                                        //do something
                                    }
                                });
                            }
                        }
                    }
                }),
                store = new Store({
                    url : 'index.php?m=admin&f=level&a=show',
                    autoLoad:true
                }),
                grid = new Grid.Grid({
                    render:'#grid',
                    columns : columns,
                    width : 700,
                    forceFit : true,
                    tbar:{ //添加、删除
                        items : [{
                            btnCls : 'button button-small',
                            text : '<i class="icon-plus"></i>添加',
                            listeners : {
                                'click' : addFunction
                            }
                        },
                            {
                                btnCls : 'button button-small',
                                text : '<i class="icon-remove"></i>删除',
                                listeners : {
                                    'click' : delFunction
                                }
                            }]
                    },
                    plugins : [editing,Grid.Plugins.CheckSelection],
                    store : store
                });

            grid.render();

            //添加记录
            function addFunction(){
                var newData = { b : 0 };

                editing.add(newData,'a',0); //添加记录后，直接编辑
            }
            //删除选中的记录
            function delFunction(){
                var selections = grid.getSelection();
                var str='';
                selections.map(
                    function (lids) {
                        str+=lids.lid+","
                    }
                )
                str='('+str.slice(0,-1)+')';
                $.ajax({
                    url:"index.php?m=admin&f=level&a=del",
                    type:"post",
                    data:{
                        lids:str
                    },
                    success:function (data) {
                        console.log(data)
                        store.remove(selections);
                    }
                })

            }
        });
    <?php echo '</script'; ?>
>
    <!-- script end -->
</div>
</body>
</html><?php }
}
