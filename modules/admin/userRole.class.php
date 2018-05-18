<?php
class userRole extends main{
    function init(){
        $db=new db("role");
        $result=$db->select();
        $this->smarty->assign("list",$result);
        $this->smarty->display("admin/showUserRole.html");
    }
    function addUserRole(){
        $this->smarty->display("admin/addUserRole.html");
    }
    function addUserRoleCon(){
        $db=new db("role");
        $arr=array(
          "rname"=>"'{$_POST["rname"]}'",
           "rwen"=>"'{$_POST["rwen"]}'",
           "readl"=>"'{$_POST["readl"]}'"
        );
        if($db->insert($arr)>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=userRole'</script>";
        };
    }
    function delRole(){
        $db=new db("role");
        $id=$_GET["id"];
        if($db->where("rid=".$id)->dele()){
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=userRole'</script>";
        };
    }
}