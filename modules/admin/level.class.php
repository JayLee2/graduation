<?php
    class level extends main{
        function init(){
            $this->smarty->display("admin/level.html");
        }
        function show(){
            $dbobj=new db("level");
            $result=$dbobj->select();
            echo json_encode($result,true);
        }
        function addUser(){
            $dbobj=new db("level");
            $lname=$_POST["lname"];
            $connum=$_POST["connum"];
            $messagenum=$_POST["messagenum"];
            $adminnum=$_POST["adminnum"];
            $usernum=$_POST["usernum"];
            $arrobj=array(
                "lname"=>"'{$lname}'",
                "connum"=>"'{$connum}'",
                "messagenum"=>"'{$messagenum}'",
                "adminnum"=>"'{$adminnum}'",
                "usernum"=>"'{$usernum}'"
            );
            if($dbobj->insert($arrobj)){
                echo $dbobj->mysql->insert_id;
            }
        }
        function editUser(){
            $dbobj=new db("level");
            $lid=$_POST["lid"];
            $lname=$_POST["lname"];
            $connum=$_POST["connum"];
            $messagenum=$_POST["messagenum"];
            $adminnum=$_POST["adminnum"];
            $usernum=$_POST["usernum"];
            $arrobj=array(
                "lname"=>"'{$lname}'",
                "connum"=>"'{$connum}'",
                "messagenum"=>"'{$messagenum}'",
                "adminnum"=>"'{$adminnum}'",
                "usernum"=>"'{$usernum}'"
            );
            if($dbobj->where("lid=".$lid)->update($arrobj)){
                echo "ok";
            }
        }
        function del(){
            $dbobj=new db("level");
            $str=$_POST["lids"];
            if($dbobj->where("lid in ".$str)->dele()){
                echo "ok";
            }
        }
    }