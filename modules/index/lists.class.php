<?php
class lists extends main{
    function init(){
        $pid=@$_GET["pid"];
        $_SESSION['url']=SERF_URL;
        $db=new db("con");
        $result=$db->select("select con.*,user.uname from con,user WHERE user.uid=con.uid AND find_in_set($pid,pos) and state=3");
        $this->smarty->assign("data",$result);
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display('index/list.html');
    }
}
