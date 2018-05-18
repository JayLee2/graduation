<?php
class contant extends main{
    function showCon(){
        $state=@$_GET["state"];
        $type=@$_GET["type"];
        $where='';
        if (isset($state)){
          $where.="and state=".$state;
        };
        if (isset($type)){
            $where.="and con.cquanxian=".$type;
        };
        $db=new db("con");
        $result=$db->select("select con.*,user.uname,category.cname from con,user,category WHERE con.uid=user.uid AND category.cid=con.catid ".$where);
        $db2=new db("position");
        $result2=$db2->select();
        $i=0;
        foreach ($result as $v){
            $str='';
            $arr=explode(",",$v["pos"]);
            foreach ($result2 as $vv) {
                if(in_array($vv["pid"], $arr)){
                    $str.=",".$vv["pname"];
                };
            }
            $result[$i]["pname"]=$str;
            $i++;
        }
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/showCon.html");
    }
    function addquanxian(){
        $db=new db("con");
        $result=$db->select("select con.*,user.uname from con,user WHERE con.uid=user.uid AND cid=".$_GET["cid"]);
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/addquanxian.html");
    }
    function addquanxianCon(){
        $db=new db("con");
        $cquanxian=$_POST["quanxian"];
        $arr=array(
            "cquanxian"=>$cquanxian,
            "state"=>3
        );
        //默认点击量
        $db2=new db("hits");
        $arr2=array(
            "conid"=>$_GET["cid"],
            "hnum"=>"0"
        );
        if($db->where("cid=".$_GET['cid'])->update($arr)){
            echo "<script>alert('添加权限成功');location.href='index.php?m=admin&f=contant&a=showCon'</script>";
        };
    }
}