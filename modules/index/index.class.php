<?php
class index extends main{
    function init(){
        //获取最新文章
        $db=new db("con");
        $result=$db->select("select con.*,user.uname,hits.hnum from con,user,hits WHERE con.uid=user.uid AND con.cid=hits.conid AND state=3 ORDER BY condate DESC limit 3");
        foreach($result as $k=>$v){
            $db3=new db("good");
            $result[$k]["like"]=count($db3->where("conid=".$v["cid"])->select());
        }
        $this->smarty->assign("data",$result);
        //获取热门文章
        $db2=new db("con");
        $result2=$db2->select("select con.*,user.uname,hits.hnum from con,user,hits WHERE con.uid=user.uid AND con.cid=hits.conid AND state=3 ORDER BY hits.hnum DESC limit 3");
        foreach($result2 as $k=>$v){
            $db3=new db("good");
            $result2[$k]["like"]=count($db3->where("conid=".$v["cid"])->select());
        }
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("uname",$_SESSION["uname"]);
            $this->smarty->assign("photo",$results[0]["photo"]);
        }
        $this->smarty->assign("data2",$result2);
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display('index/index.html');
    }
}
