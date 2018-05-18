<?php
class login extends main{
    function init(){
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
//        $this->smarty->assign('prePage',$_SERVER["HTTP_REFFER"]);
        $this->smarty->display('index/login.html');
    }
    function cod(){
        include_once LIBS_PATH.'/code.class.php';
        $obj=new code();
        $obj->url="./static/font/asd.ttf";
        $obj->codename='indexCode';
        $obj->out();
    }
    function cod2(){
        include_once LIBS_PATH.'/code.class.php';
        $obj=new code();
        $obj->url="./static/font/asd.ttf";
        $obj->codename='indexCode2';
        $obj->out();
    }
    function check(){

        $url=isset($_SESSION['url'])?$_SESSION['url']:'index.php';
        $code=sql(P("code"));
        $dbobj=new db('user');
        if($code!=$_SESSION["indexCode"]){
            echo "<script>alert('验证码错误');location.href='index.php?m=index&f=login'</script>";
        }
        if($row=$dbobj->where("uname='".sql(P('email'))."' and upass='".md5(P('pass'))."'")->find()){
            $_SESSION["login2"]="yes";
            $_SESSION["uname"]=$row["uname"];
            $_SESSION["user"]=$row["nicheng"];
            $_SESSION["uid"]=$row["uid"];
            header("location:{$url}");
        }else{
            $this->smarty->assign("prePage","index.php");
            $this->smarty->assign("message","用户名和密码不匹配");
            $this->smarty->display("index/error.html");
        }
    }
    function zhuce(){
        /*检查验证码*/
        $code=sql(P("cod2"));
        if($code!=$_SESSION["indexCode2"]){
            echo "<script>alert('验证码错误');location.href='index.php?f=login'</script>";
        }
        /*检查格式是否正确*/
        $db=new db("user");
        $email2=sql(P("email2"));
        $pas1=md5(P("pas1"));
        $pas2=md5(P("pas2"));
        if (!preg_match("/^[a-z]([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?$/i",$email2)){
            $this->smarty->assign("message","邮箱格式不正确");
            $this->smarty->assign("prePage","index.php");
            $this->smarty->display("index/error.html");
        };
        /*用户名已存在*/
        if($result=$db->where("uname='{$email2}' ")->select()){
            $this->smarty->assign("message","用户名已经存在");
            $this->smarty->assign("prePage","index.php");
            $this->smarty->display("index/error.html");
        }
        /*判断密码是否一致*/
        if($pas1!=$pas2){
            $this->smarty->assign("message","两次密码不一致");
            $this->smarty->assign("prePage","index.php");
            $this->smarty->display("index/error.html");
        }
        $arr=array(
            "uname"=>"'$email2'",
            "upass"=>"'$pas1'",
            "level"=>1
        );
        if($db->insert($arr)){
            echo "<script>alert('注册成功');location.href='index.php?f=login'</script>";
        };
        }
    function outlogin(){
        $url=isset($_SESSION['url'])?$_SESSION['url']:'index.php';
        unset($_SESSION["login2"]);
        unset($_SESSION["user"]);
        $this->smarty->assign("message","退出成功");
        $this->smarty->assign("prePage",$url);
        $this->smarty->display("index/success.html");
    }
    function yibu(){
        $email2=sql(P("email2"));
        $db=new db("user");
        if($result=$db->where("uname='{$email2}' ")->select()){
            echo "false";
        }else{
            echo "true";
        };
    }
}
