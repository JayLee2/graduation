<?php
    class showUser extends main{
        function init(){
            $this->smarty->display("admin/showUser.html");
        }
        function showUsers(){
            $db=new db("user");
            $count=count($db->select());
            $limit=$_GET['limit'];
            $start=$_GET['start'];
            $result=$db->limit(" {$start},{$limit}")->select();
            $arr=array();
            $arr['rows']=$result;
            $arr['results']=$count;
            echo json_encode($arr,true);
        }
        function addUser(){
            $db2=new db("level");
             if (count($db2->where("lid={$_SESSION['level']} and find_in_set('1',adminnum)")->select())>0){

                    $db=new db("user");
                $uname=$_POST["uname"];
                $upass=$_POST["upass"];
                $nicheng=$_POST["nicheng"];
                $level=$_POST["level"];
                $phone=$_POST["phone"];
                $arr=array(
                    "uname"=>"'$uname'",
                    "upass"=>"'$upass'",
                    "nicheng"=>"'$nicheng'",
                    "level"=>"'$level'",
                    "phone"=>"'$phone'",
                );
                if($db->insert($arr)){
                    echo $db->mysql->insert_id;
                };
            }else{
                echo "<script>alert('没有权限');location.href='index.php?m=admin&f=showUser'</script>";
            };

        }
        function delUser(){
            $dbobj = new db("user");
            $str = $_POST["uids"];
            if ($dbobj->where("uid in " . $str)->dele()) {
                echo "ok";
            }
        }
        function editUser(){
            $dbobj = new db("user");
            $uid = $_POST["uid"];
            $uname=$_POST["uname"];
            $upass=$_POST["upass"];
            $nicheng=$_POST["nicheng"];
            $level=$_POST["level"];
            $phone=$_POST["phone"];
            $arr=array(
                "uname"=>"'$uname'",
                "upass"=>"'$upass'",
                "nicheng"=>"'$nicheng'",
                "level"=>"'$level'",
                "phone"=>"'$phone'",
            );
            if ($dbobj->where("uid=" . $uid)->update($arr)) {
                echo "ok";
            }
        }
    }