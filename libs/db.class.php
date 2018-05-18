<?php
//$dd=new mysqli("localhost","root","123456","www1703");
class db{
    public function __construct($table='')
    {
        global $config;
        $this->host=$config["db"]["host"];
        $this->user=$config["db"]["user"];
        $this->pasw=$config["db"]["pasw"];
        $this->name=$config["db"]["dbname"];
        $this->table=$table;
        $this->where=$this->limit='';
        $this->ziduan='*';
        $this->connect();
        $this->select();
    }
    public function connect(){
        $this->mysql=new mysqli($this->host,$this->user,$this->pasw,$this->name);
        if(mysqli_connect_errno()){
            echo "链接数据库错误";
            exit;
        }
        $this->mysql->set_charset("utf8");
    }
    public function settable($table){
        $this->tablename=$table;
        return $this;
    }
    public function where($where){
        $this->where=" where ".$where;
        return $this;
    }
    public function ziduan($ziduan){
        $this->ziduan=$ziduan;
        return $this;
    }
    public function limit($limit){
        $this->limit=" limit ".$limit;
        return $this;
    }
    //查询数据
    public function select($parm='')
    {
        if ($parm) {
            $sql = $parm;
        } else {
            $sql = "select " . $this->ziduan . " from " . $this->table . $this->where . $this->limit;
        }
        $result=$this->mysql->query($sql);
        $arra=$result->fetch_all(MYSQLI_ASSOC);
        return $arra;
    }
    //查询单条数据
    public function find(){
        $sql="select ".$this->ziduan." from ".$this->table.$this->where.$this->limit;
        $result=$this->mysql->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }
    //增添数据
    //insert into table ('name','age') values ('sa','sa')
    public function insert($arrobj){
        $key='';
        $value='';
        foreach ($arrobj as $k=>$v){
            $key.=$k.',';
            $value.=$v.',';
        }
        $key=substr($key,0,-1);
        $value=substr($value,0,-1);
        $sql="insert into ".$this->table." (".$key.")"." values (".$value.")";
        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
    //删除数据
    //delete from abc where name=zhangsan
    public function dele(){
        $sql="delete from ".$this->table.$this->where;
        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
    //更改数据

    public function update($arr){
        $str='';
        foreach ($arr as $k=>$v){
            $str.=$k.'='.$v.', ';
        }
        $str=substr($str,0,-2);

     $sql="update ".$this->table." set ".$str.$this->where;
     $this->mysql->query($sql);
     return $this->mysql->affected_rows;
    }
}
?>