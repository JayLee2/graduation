<?php
class addCon extends main{
    function add(){
        $catid=$_GET["cid"];
        $db=new db("position");
        $result=$db->select();
        $this->smarty->assign("data",$result);
        //获取头像
        if(isset($_SESSION["login2"])){
            $dbo=new db("user");
            $results=$dbo->where("uid=".$_SESSION["uid"])->select();
            $this->smarty->assign("photo",$results[0]["photo"]);
            $this->smarty->assign("uname",$_SESSION["uname"]);

        }
        $this->smarty->assign("cid",$catid);
        $this->smarty->display("index/addCon.html");
    }
    function addConCon(){
        $catid=$_GET["cid"];
        $ctitle=htmlspecialchars(addslashes($_POST["ctitle"]));
//        $con=addcslashes($_POST["con"],"script");
        $con=$_POST["con"];
        $photo=$_POST["photo"];
        $price=$_POST["price"];
        $uid=$_SESSION["uid"];
        $pos=implode(",",$_POST["pos"]);
        $state=isset($_POST["state"])?1:2;
        $arr=array(
            "ctitle"=>"'{$ctitle}'",
            "con"=>"'{$con}'",
            "uid"=>$uid,
            "thumb"=>"'{$photo}'",
            "catid"=>$catid,
            "price"=>$price,
            "pos"=>"'{$pos}'",
            "state"=>"'{$state}'"
        );
        $db=new db("con");
        if($db->insert($arr)>0){
            echo "<script>alert('插入成功');location.href='index.php?f=write&a=lists&cid={$catid}'</script>";
        }else{
            echo "<script>alert('插入失败');location.href='index.php?f=write&a=lists&cid={$catid}'</script>";
        };
    }
    function editCon(){
        $cid=$_GET["cid"];
        $wid=$_GET["wid"];
        $db=new db("con");
        $result=$db->where("cid=".$wid)->select();
        $this->smarty->assign("data",$result);
        //推荐位表
        $db2=new db("position");
        $result1=$db2->select();
        $this->smarty->assign("data1",$result1);
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("wid",$wid);
        $this->smarty->display("index/editCon.html");
    }
    function editConCon(){
        $catid=$_GET["cid"];
        $wid=$_GET["wid"];
        $ctitle=$_POST["ctitle"];
//        $con=addcslashes($_POST["con"],"script");
        $con=$_POST["con"];
        $photo=$_POST["photo"];
        $price=$_POST["price"];
        $uid=$_SESSION["uid"];
        $pos=implode(",",$_POST["pos"]);
        $arr=array(
            "ctitle"=>"'{$ctitle}'",
            "con"=>"'{$con}'",
            "uid"=>$uid,
            "thumb"=>"'{$photo}'",
            "catid"=>$catid,
            "price"=>$price,
            "pos"=>"'{$pos}'"
        );
        $db=new db("con");
        if($db->where("cid=".$wid)->update($arr)>0){
            echo "<script>alert('修改成功');location.href='index.php?f=write&a=lists&cid={$catid}'</script>";
        };
    }
    function delCon(){
        $catid=$_GET["cid"];
        $db=new db("con");
        if($db->where("cid=".$_GET["wid"])->dele()){
            echo "<script>alert('删除成功');location.href='index.php?f=write&a=lists&cid={$catid}'</script>";

        };
    }
}