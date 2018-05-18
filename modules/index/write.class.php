<?php
class write extends  main{
    function init(){
        if(!isset($_SESSION["login2"])){
            $this->smarty->assign("prePage","index.php?f=login");
            $this->smarty->assign("message","登陆后即可编写");
            $this->smarty->display("index/error.html");
            exit;
        }
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $tree=new tree();
        $cat=$tree->getTree(0,'&nbsp;&nbsp;&nbsp;&nbsp;',0,"category");
        $this->smarty->assign("cat",$cat);
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display("index/write.html");
    }
    function lists(){
        $uid=$_SESSION["uid"];
        $cid=$_GET["cid"];
        $db=new db("con");
        $result=$db->where("catid={$cid} and uid={$uid}")->select();
        $this->smarty->assign("data",$result);
        $this->smarty->assign("cid",$cid);
        $this->smarty->display("index/lists.html");
    }
    function upload(){
        include_once LIBS_PATH.'/server.class.php';
        $uuobj=new upload();
    }
}