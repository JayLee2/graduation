<?php
class music extends main{
    function init(){

        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("uname",$_SESSION["uname"]);
            $this->smarty->assign("photo",$results[0]["photo"]);
        }
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display('index/music.html');
    }
}
