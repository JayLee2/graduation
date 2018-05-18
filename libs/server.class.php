<?php
    class upload{
        public $size;
        public $filename;
        public $data;
        public $root;
        public $date;
        public $type;
        public $time;
        public $fullpath;
        public function __construct(){
            $this->time=date('y-m-d');
            $this->size=1024*1024;
           $this->filename='file';
           $this->type="image/jpeg,image/png,image/gif";
           $this->root='upload';
           $this->fileMove();
        }
        public function accept(){
            $this->data=$_FILES[$this->filename];
        }
        private function check(){
            if(is_uploaded_file($this->data["tmp_name"])){
               if($this->date['size']<$this->size&&strrchr($this->type,$this->data['type'])){
                    return true;
               }else{
                   return false;
               }
            }
        }
        public function dir(){
            $name=time().mt_rand(0,10000).$this->data['name'];
            if (!is_dir($this->root.'/'.$this->time)){
                mkdir($this->root.'/'.$this->time,0777,true);
            }
            $this->fullpath=$this->root.'/'.$this->time.'/'.$name;
        }
        public function create(){
            move_uploaded_file($this->data["tmp_name"],$this->fullpath);
            echo $this->fullpath;
        }
        public function fileMove(){
            $this->accept();
            if($this->check()){
                $this->dir();
                $this->create();
            }
        }
    }
