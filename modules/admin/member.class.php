<?php
 class member extends main{
     function init(){
         $db=new db("level");
         $result=$db->select();
         $s=count($db->where("lid={$_SESSION['level']} and find_in_set('2',adminnum)")->select());
         $g=count($db->where("lid={$_SESSION['level']} and find_in_set('3',adminnum)")->select());

         $this->smarty->assign('role',$result);
         $this->smarty->assign('s',$s);
         $this->smarty->assign('g',$g);
         $this->smarty->display('admin/member.html');
     }
     function showUser(){
         $dbobj=new db("admin");
         $limit=$_GET["limit"];
         $start=$_GET["start"];
         $result=$dbobj->select("select admin.*,level.lname from admin,level WHERE admin.level=level.lid limit {$start},{$limit}");
         $total=count($dbobj->select("select admin.*,level.lname from admin,level WHERE admin.level=level.lid"));
         $arr=array();
         $arr['rows']=$result;
         $arr['results']=$total;
         echo json_encode($arr,true);
     }
     function addUser(){
         $dbobj2=new db("level");
         if (count($dbobj2->where("lid={$_SESSION['level']} and find_in_set('1',adminnum)")->select())>0){
             $dbobj=new db("admin");
             $aname=$_POST["aname"];
             $lname=$_POST["lname"];
             $apass=md5($_POST["apass"]);
             $arrobj=array(
                 "aname"=>"'{$aname}'",
                 "level"=>"{$lname}",
                 "apass"=>"'{$apass}'"
             );
             if($dbobj->insert($arrobj)){
                 echo $dbobj->mysql->insert_id;
             }
         }else{
             echo "<script>alert('没有权限');location.href='index.php?m=admin&f=member'</script>";
         }

     }
     function editUser(){
             $dbobj = new db("admin");
             $aid = $_POST["aid"];
             $aname = $_POST["aname"];
             $lname = $_POST["lname"];
             $apass =(strlen($_POST["apass"])==32)?$_POST["apass"]:md5($_POST["apass"]);
             $arrobj = array(
                 "aname" => "'{$aname}'",
                 "level" => "{$lname}",
                 "apass" => "'{$apass}'"
             );
             if ($dbobj->where("aid=" . $aid)->update($arrobj)) {
                 echo "ok";
             }
     }
     function delUser(){
         $dbobj2=new db("level");
         if (count($dbobj2->where("lid={$_SESSION['level']} and find_in_set('2',adminnum)")->select())>0) {
             $dbobj = new db("admin");
             $str = $_POST["aids"];
             if ($dbobj->where("aid in ". $str)->dele()) {
                 echo "ok";
             }
         }else{
             echo "<script>alert('没有权限')</script>";
         }
     }
 }