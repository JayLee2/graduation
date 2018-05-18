<?php
class article extends main{
    function init(){
        $cid=$_GET["cid"];
        $db=new db("con");
        $result=$db->select("select con.*,user.* from con,user WHERE con.uid=user.uid AND cid=".$cid);
        $db2=new db("hits");
        $result2=$db2->where("conid=".$cid)->find();
        $_SESSION['url']=SERF_URL;
        $isLogin='';
        if(isset($_SESSION["login2"])){
            $isLogin='isLogin';
        }else{
            $isLogin='noLogin';
        }
        //关注
        $hidden='block';
        $uid=@$_SESSION["uid"];
        if($uid==$result[0]["uid"]){
            $hidden='none';
        }
        //判断是否关注
        $html='';
        if(!isset($_SESSION["login2"])){
            $html='关注';
        }else{
            $db= new  db("follow");
            if(count($db->where("uid1={$uid} and uid2={$result[0]['uid']}")->select())>0){
                $html='取消关注';
            }else{
                $html='关注';
            }
        }
        //判断是否已经喜欢文章
        $like='';
        if(!isset($_SESSION["login2"])){
            $like='喜欢';
        }else{
            $db= new  db("good");
            if(count($db->where("uid={$uid} and conid={$result[0]['cid']}")->select())>0){
                $like='取消喜欢';
            }else{
                $like='喜欢';
            }
        }

        //获取留言
        $dbobj=new db("message");
        $no1=$dbobj->select("select message.*,user.* from message,user where message.conid={$cid} AND message.uid1=user.uid and state=0");
        foreach ($no1 as $k=>$v){
            $no2=$dbobj->select("select message.*,user.* from message,user where message.conid={$cid} AND message.uid2=user.uid AND state={$v["mid"]}");
            if(count($no2)>0){
                foreach ($no2 as $vv){
                    $db3=new db("user");
                    $result3=$db3->select("select * from user WHERE uid={$vv['uid1']}");
                    $vv["uname1"]=$result3[0]["nicheng"];
                    $result4=$db3->select("select * from user WHERE uid={$vv['uid2']}");
                    $vv["uname2"]=$result4[0]["nicheng"];
                    $no1[$k]["son"][]=$vv;
                }
            }else{
                $no1[$k]["son"]=array();
            }
            $db3=new db("user");
            $result3=$db3->select("select * from user WHERE uid={$v['uid1']}");
            $no1[$k]["uname1"]=$result3[0]["nicheng"];
            $result4=$db3->select("select * from user WHERE uid={$v['uid2']}");
            $no1[$k]["uname2"]=$result4[0]["nicheng"];
        }
        $this->smarty->assign("isLogin",$isLogin);
        $this->smarty->assign("no1",$no1);
        $this->smarty->assign("like",$like);
        $this->smarty->assign("html",$html);
        $this->smarty->assign("hidden",$hidden);
        $this->smarty->assign("data2",$result2);
        $this->smarty->assign("data",$result);
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display('index/article.html');
    }
    function hit(){
        $db=new db("hits");
        $cid=$_POST["cid"];
        $result=$db->where("conid=".$cid)->select();
        if(count($result)>0){
            $arr=array(
                "hnum"=>"hnum+1"
            );
            if($db->where("conid=".$cid)->update($arr)>0){
                echo "ok";
            };
        }else{
            $arr=array(
                "conid"=>$cid,
                "hnum"=>1
            );
            if($db->insert($arr)>0){
                echo "ok";
            };
        }
    }
    function guanzhu(){
        $uid2=$_POST["uid"];
        $c=$_POST["c"];
        $db=new db("follow");
        if(isset($_SESSION["login2"])){
            $uid=$_SESSION["uid"];
            $arr=array(
                "uid1"=>$uid,
                "uid2"=>$uid2
            );
            if ($c=='关注'){
                if($db->insert($arr)>0){
                    echo 'has';
                };
            }else{
                if ($db->where("uid1={$uid} and uid2={$uid2}")->dele()){
                    echo "no";
                }
            }
        }else{
            echo "err";
        }
    }
    function like(){
        $c=$_POST["c"];
        $uid2=$_POST["uid"];
        $conid=$_POST["conid"];
        $db=new db("good");

        if(isset($_SESSION["login2"])){
            $uid=@$_SESSION["uid"];
            $arr=array(
                "uid"=>$uid,
                "conid"=>$conid
            );
            if ($c=='喜欢'){
                if($uid==$uid2){
                    echo "qin";
                }else{
                    if($db->insert($arr)>0){
                        echo 'has';
                    };
                }

            }else{
                if ($db->where("uid={$uid} and conid={$conid}")->dele()){
                    echo "no";
                }
            }
        }else{
            echo "err";
        }
    }
}
