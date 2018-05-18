<?php
class message{
    function level(){
        if(!isset($_SESSION["login2"])){

        }else{
            $author=$_POST["author"];
            $uid=@$_SESSION["uid"];
            $val=$_POST["val"];
            $cid=$_POST["cid"];
            $db=new db("message");
            $arr=array(
                "uid1"=>$uid,
                "uid2"=>$author,
                "conid"=>$cid,
                "mcon"=>"'{$val}'",
                "state"=>0
            );
            if($db->insert($arr)){
                $mid=$db->mysql->insert_id;
                $result=$db->select("select message.*,user.*,con.cid from message,user,con WHERE message.uid1=user.uid AND message.conid=con.cid and message.mid={$mid}");
                echo json_encode($result);
            };
        }
    }
    function repeat(){
        $uid1=@$_SESSION["uid"];
        $uid=$_POST["uid"];
        $cid=$_POST["cid"];
        $mid=$_POST["mid"];
        $db=new db("user");
        $result=$db->where("uid={$uid}")->select();
        $result2=$db->where("uid={$uid1}")->select();
        $arr=array(
            "uname1"=>$result[0]["nicheng"],
            "uname2"=>$result2[0]["nicheng"],
        );
        echo json_encode($arr);
    }
    function ret(){
        $uid1=@$_SESSION["uid"];
        $uid=$_POST["uid"];
        $cid=$_POST["cid"];
        $mid=$_POST["mid"];
        $val=$_POST["val"];
        $arr=array(
            "uid1"=>$uid1,
            "uid2"=>$uid,
            "conid"=>$cid,
            "state"=>$mid,
            "mcon"=>"'{$val}'"
        );
        $db=new db("message");
        if($db->insert($arr)>0){
            echo $uid1;
        }else{
            echo "no";
        }
    }
}