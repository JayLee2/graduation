<?php
    class cat extends main{
        function init(){
            $this->smarty->display("admin/cat.html");
        }
        function showCat(){
            $arr=array(
                array(
                    "id"=>"0",
                    "text"=>"一级菜单",
                    "children"=>array()
                )
            );
            $this->tree(0,$arr[0]["children"]);
            echo json_encode($arr,true);
        }
        function tree($pid=0,&$arr){
            $db=new db("category");
            $result=$db->where("pid=".$pid)->select();
            for($i=0;$i<count($result);$i++) {
                $arr[] = array("id" => $result[$i]["cid"],"text"=>$result[$i]["cname"]);
                $this->tree($result[$i]["cid"],$arr[$i]["children"]);
            }
        }
        function addCat(){
            $db=new db("category");
            $cname=sql(P("cname"));
            $cinfo=sql(P("cinfo"));
            $pid=$_POST["pid"];
            $arr=array(
                "cname"=>"'$cname'",
                "cinfo"=>"'$cinfo'",
                "pid"=>$pid
            );
            if($db->insert($arr)){
                echo "<script>alert('插入成功')</script>";
            }
        }
        function showCate(){
            $this->smarty->display("admin/showCate.html");
        }
        function category(){
            $db=new db('category');
            $result=$db->select();
            $arr=array();
            $total=count($result);
            $arr['total']=$total;
            $arr['rows']=array(
                array(
                    'id'=>0,
                    'cname'=>"一级栏目",
                    'cinfo'=>'一级分类'
                )
            );
            $arr['footer']=array(array(
                'cname'=>'数据总量',
                'cinfo'=>$total,
                "iconCls"=>"icon-sum"
            ));
            foreach ($result as $v){
                $v['id']=$v['cid'];
                $v['_parentId']=$v['pid'];
                $arr['rows'][]=$v;
            }
            echo json_encode($arr,true);

        }
        function editFenlei(){
            $cid=$_POST['cid'];
            $field=$_POST['field'];
            $val=$_POST['val'];
            $db=new db('category');
            $arr=array(
                "'{$field}'"=>"'{$val}'"
            );
            if($db->where('cid='.$cid)->update($arr)>0){
                echo 'ok';
            }else{
                echo 'oy';
            }
        }
        function delFenlei(){
            $cid=$_POST['cid'];
            $db=new db('category');
            if($db->where('cid='.$cid)->dele()){
                echo 'ok';
            }else{
                echo 'oy';
            }
        }
        function pos(){
            $this->smarty->display("admin/pos.html");
        }
        function showPos(){
            $db=new db("position");
            $limit=$_GET["limit"];
            $start=$_GET["start"];
            $result=$db->select("select * from position limit {$start},{$limit}");
            $count=count($db->select());
            $arr["rows"]=$result;
            $arr["results"]=$count;
            echo json_encode($arr,true);
        }
        function addPos(){
            $pname=$_POST["pname"];
            $arr=array(
                "pname"=>"'{$pname}'"
            );
            $db=new  db("position");
            if($db->insert($arr)){
                echo $db->mysql->insert_id;
            };
        }
        function editPos(){
            $pid=$_POST["pid"];
            $pname=$_POST["pname"];
            $arr=array(
              "pname"=>"'{$pname}'"
            );
            $db=new db("position");
            if($db->where("pid=".$pid)->update($arr)){
                echo "<script>alert('修改成功')</script>";
            };
        }
        function delPos(){
            $db=new db("position");
            $str = $_POST["pids"];
            if ($db->where("pid in " . $str)->dele()) {
                echo "ok";
            }
        }
    }