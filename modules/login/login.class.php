<?php
//登录注册
class login extends main{
    function init(){
        $this->smarty->display('admin/login.html');
    }
    function cod(){
        include_once LIBS_PATH.'/code.class.php';
        $obj=new code();
        $obj->url="./static/font/asd.ttf";
        $obj->codename='adminCode';
        $obj->out();
    }
    function check(){
        //验证码验证
        if ($_SESSION["adminCode"]!=P("yan")){
            echo "<script>alert('验证码错误');location.href='index.php?m=login&f=login'</script>";
            exit;
        }
        //账号密码验证
        $dbobj=new db('admin');
        if($row=$dbobj->where("aname='".P('user')."' and apass='".md5(P('pasw'))."'")->find()){
            $_SESSION["login"]="yes";
            $_SESSION["username"]=$row["aname"];
            $_SESSION["level"]=$row["level"];
            echo "<script>location.href='index.php?m=admin&f=admin'</script>";
        }else{
            echo "<script>alert('账号密码不匹配');location.href='index.php?m=login&f=login'</script>";
        };
    }

}