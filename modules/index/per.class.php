<?php
class per extends main{
    function init(){
        $uname=$_GET["uname"];
        $_SESSION['url']=SERF_URL;
        //查询作者信息
        $db=new db("user");
        $result=$db->where("uname='{$uname}'")->select();
        //设置访问增加
        $db3=new db("fangke");
        $arr=array(
            "uid1"=>isset($_SESSION["uid"])?$_SESSION["uid"]:-1,
            "uid2"=>$result[0]["uid"]
        );
        $db3->insert($arr);
        $fangke=count($db3->where("uid2=".$result[0]["uid"])->select());
        //查询关注，被关注信息
        $db2=new db("follow");
        $fensi=count($db2->where("uid2=".$result[0]["uid"])->select());
        $guanzhu=count($db2->where("uid1=".$result[0]["uid"])->select());
        $this->smarty->assign('fangke',$fangke);
        $this->smarty->assign('guanzhu',$guanzhu);
        $this->smarty->assign('fensi',$fensi);
        $this->smarty->assign("data",$result);
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display('index/per.html');
    }
    function action(){
        $flag=$_POST["attr"];
        $uid=$_POST["uid"];
        if ($flag=='fabu'){
            $db=new db("con");
            $result=$db->select("select con.*,user.* from con,user WHERE con.uid=user.uid and con.uid=".$uid);
        }
        if($flag=='like'){
            $db=new db("con");
            $result=$db->select("select con.*,good.*,user.* from con,good,user WHERE con.uid=user.uid and con.cid=good.conid and good.uid={$uid}");
        }
        if($flag=='huifu'){
            $db=new db("con");
            $result=$db->select("select con.*,user.* from con,message,user WHERE user.uid=con.uid AND message.uid1=user.uid and con.cid=message.conid AND  message.uid1={$uid}");
        }
        echo json_encode($result);
    }
    function guanzhu(){
        $uid=$_POST["uid"];
        $db=new db("follow");
        $result=$db->select("select user.*,follow.* from user,follow WHERE follow.uid1={$uid} AND follow.uid2=user.uid");
        //获取关注度
        foreach ($result as $k=>$v){
            $db=new db("follow");
            $results=count($db->where("uid2=".$v["uid"])->select());
            $result[$k]["guanzhu"]=$results;
        }
        echo json_encode($result);
    }
}
