<?php
class myself extends main{
    function init(){
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $this->smarty->assign('session',isset($_SESSION["login2"])?$_SESSION["login2"]:'2');
        $this->smarty->display("index/myself.html");
    }
    function submit(){
        $uid=$_SESSION["uid"];
        $nicheng=$_POST["nicheng"];
        $phone=$_POST["phone"];
        $photo=$_POST["photo"];
        $sex=$_POST["sex"];
        $db=new db("user");
        $arr=array(
            "nicheng"=>"'{$nicheng}'",
            "phone"=>"'{$phone}'",
            "photo"=>"'{$photo}'"
        );
        if($db->where("uid=".$uid)->update($arr)>0){
            echo "<script>alert('修改成功');location.href='index.php?f=myself'</script>";
        }
    }
}