<?php
/* Smarty version 3.1.30, created on 2018-05-31 07:51:24
  from "C:\wamp64\www\mvcyyy\graduation\template\admin\showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0fa97ca70bd3_21408517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b7eb2d6f9624a7de95ccefda196228dfda6c54' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\admin\\showUser.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0fa97ca70bd3_21408517 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input type="hidden" name="uid">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>用户名称：</label>
                    <div class="controls">
                        <input name="uname" type="text" data-rules="{ required:true,email:true}" class="input-normal control-text">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>昵称</label>
                    <div class="controls">
                        <input name="nicheng" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>密码</label>
                    <div class="controls">
                        <input name="upass" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label">等级</label>
                    <div class="controls">
                        <select name="level" class="input-normal">
                            <option value="">请选择</option>
                            <option value="0">普通会员</option>
                            <option value="2">黄金会员</option>
                            <option value="3">白金会员</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>电话</label>
                    <div class="controls">
                        <input name="phone" type="text" class="input-normal control-text">
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
                enumObj = { "0" : "普通会员","2" : "黄金会员","3" : "白金会员" },
                columns = [
                    { title : 'id',dataIndex :'uid' }, //editor中的定义等用于 BUI.Form.Field.Text的定义
                    { title : '用户名称', dataIndex :'uname' },
                    { title : '昵称',dataIndex : 'nicheng' },
                    { title : '照片',dataIndex : 'photo' },
                    { title : '等级',dataIndex : 'level' ,renderer : Grid.Format.multipleItemsRenderer(enumObj) },
                    { title : '电话',dataIndex : 'phone' },
                    { title : '注册时间',dataIndex : 'regdata' },
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
                                url = 'index.php?m=admin&f=showUser&a=addUser';
                            }else{
                                url = 'index.php?m=admin&f=showUser&a=editUser';
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
                                                form.setFieldValue('uid',data);
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
                    url : 'index.php?m=admin&f=showUser&a=showUsers',
                    autoLoad:true,
                    pageSize:5
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
                        pagingBar:true
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
                    function (uids) {
                        str+=uids.uid+","
                    }
                )
                str='('+str.slice(0,-1)+')';
                $.ajax({
                    url:"index.php?m=admin&f=showUser&a=delUser",
                    type:"post",
                    data:{
                        uids:str
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
