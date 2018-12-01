<?php
/* Smarty version 3.1.30, created on 2018-05-31 06:35:54
  from "C:\wamp64\www\mvcyyy\graduation\template\index\myself.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0f97ca51a690_38854975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ea224e78f954c809f1e9941510968b747c0d668' => 
    array (
      0 => 'C:\\wamp64\\www\\mvcyyy\\graduation\\template\\index\\myself.html',
      1 => 1527659609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5b0f97ca51a690_38854975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_URL;?>
/myself.css">
<link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
<div class="boximg">
    <img src="<?php echo IMG_URL;?>
/g.jpg" alt="">
</div>
<div class="rig">
    <form action="index.php?f=myself&a=submit" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">昵称</label>
            <input type="text" name="nicheng" class="form-control" id="exampleInputEmail1" placeholder="昵称">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">手机</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="手机">
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="sex"  value="1">男
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="sex"  value="2">女
            </label>
        </div>
        <div class="form-group">
            <div class="per">
                <input type="hidden" name="photo">
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {
        var obj=new upload();
        obj.createView({ parent:document.querySelector('.per') });
        obj.change();
        obj.up(function (data) {
            console.log(data)
            document.querySelector('input[type=hidden]').value=data;
        });
    })
<?php echo '</script'; ?>
><?php }
}
