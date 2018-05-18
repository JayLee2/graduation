<?php
class read extends main{
    function init(){
        $_SESSION['url']=SERF_URL;
        $db=new db("position");
        $result=$db->select();
        for($i=0;$i<count($result);$i++){
            $db2=new db("con");
            $pid=$result[$i]['pid'];
            $count=count($db2->select("select * from con WHERE find_in_set({$pid},pos) and state=3"));
            $result[$i]["count"]=$count;
        }
        //获取热评文章
        $db3=new db("con");
        $result2=$db3->select("select con.*,hits.hnum from con,hits where con.cid= hits.conid limit 3");
        foreach ($result2 as $k=>$v){
            //获取评论数
            $db4=new db("message");
            if(count($result3=$db4->where("conid=".$v["cid"])->select())>0){
                $ping=count($result3);
            }else{
                $ping=0;
            };
            $result2[$k]["ping"]=$ping;
            //获取喜欢数
            $db5=new db("good");
            if(count($result4=$db5->where("conid=".$v["cid"])->select())>0){
                $xi=count($result4);
            }else{
                $xi=0;
            };
            $result2[$k]["ping"]=$ping;
            $result2[$k]["xi"]=$xi;
        }
        $this->smarty->assign("hotPing",$result2);
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $this->smarty->assign("position",$result);
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display('index/read.html');
    }
}
