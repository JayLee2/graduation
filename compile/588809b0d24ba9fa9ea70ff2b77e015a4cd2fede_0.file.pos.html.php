<?php
/* Smarty version 3.1.30, created on 2018-05-03 04:55:23
  from "C:\wamp64\www\mvcyyy\template\admin\pos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aea963bccff64_89704238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588809b0d24ba9fa9ea70ff2b77e015a4cd2fede' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\template\\admin\\pos.html',
      1 => 1510322562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aea963bccff64_89704238 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input type="hidden" name="pid">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>推荐位名称</label>
                    <div class="controls">
                        <input name="pname" type="text" data-rules="{ required:true }" class="input-normal control-text">
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
                enumObj = { "1" : "选项一","2" : "选项二","3" : "选项三" },
                columns = [
                    { title : 'pid',dataIndex :'pid' }, //editor中的定义等用于 BUI.Form.Field.Text的定义
                    { title : '推荐位名称', dataIndex :'pname' },
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
                                url = 'index.php?m=admin&f=cat&a=addPos';
                            }else{
                                url = 'index.php?m=admin&f=cat&a=editPos';
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
                                                form.setFieldValue('pid',data);
                                                edtor.accept();
                                            }else{
                                                edtor.accept();
                                            }
                                            //将a 改成 1 测试一下显示错误
                                            if(data.hasError){
                                                //返回的数据是 { hasError : fasle,error : 'xxxx',field : 'xxx' },也可以是任意格式的数据如 ： { success : false,'error' : 'xxxxx' }
                                                var field = data.field;
                                                form.getField(field).showErrors([data.error]); //也可以多个字段的错误信息 例如 errors : [{ field : 'a',error: 'addd' },{ field : 'a',error: 'addd' }]
                                            }else{

                                            }

                                        }
                                    });
                                }
                            }
                        }
                    }),
                store = new Store({
                    url : 'index.php?m=admin&f=cat&a=showPos',
                    autoLoad:true,
                    pageSize:3
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
                    bbar:{
                        // pagingBar:表明包含分页栏
                        pagingBar:true,

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
                var str=''
                selections.map(
                    function (pids) {
                        str+=pids.pid+","
                    }
                )
                str='('+str.slice(0,-1)+')';
                $.ajax({
                    url:"index.php?m=admin&f=cat&a=delPos",
                    type:"post",
                    data:{
                        pids:str
                    },
                    success:function (data) {
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
