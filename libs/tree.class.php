<?php
class tree{
    public $str='';
    function getTree($pid,$flag='<',$step,$table){
        $db=new db($table);
        $result=$db->where("pid=".$pid)->select();
        $step++;
        $flags=str_repeat($flag,$step);
        $this->str.='<ul>';
        foreach ($result as $v){
            if(count($db->where("pid=".$v["cid"])->select())>0){
                $this->str.="<li><div>{$flags}{$v['cname']}</div>";
            }else{
                $this->str.="<li><div><a href='index.php?m=index&f=write&a=lists&cid={$v['cid']}' target='right'>{$flags}{$v['cname']}</a></div>";
            };
            $this->getTree($v["cid"],'&nbsp;&nbsp;&nbsp;&nbsp;',$step,"category");
            $this->str.="</li>";
        };
        $this->str.="</ul>";
        return $this->str;
    }
}