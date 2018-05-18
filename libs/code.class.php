<?php
//class code{
//    public function __construct()
//    {
//        $this->width="150";
//        $this->height="40";
//    }
//    function begin(){
//        header("content-type:image/png");
//        $img=imagecreatetruecolor($this->width,$this->height);
//        $color=$this->setBgcolor(255,0,0);
//        $color=imagecolorallocate($img,$color[0],$color[1],$color[2]);
//        imagefill($img,0,0,$color);
//        $fontcolor=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
////        $zhongzi='123456789asdfgh';
////        $str1=[];
////        for ($i=0;$i<4;$i++){
////            $str1[$i]=$zhongzi[mt_rand(0,strlen($zhongzi)-1)];
//////            $arr=imagettfbbox(30,0,FONT_URL."/asd.ttf",$str1[$i]);
////            $size=mt_rand(20,40);
//            imagettftext($img,20,mt_rand(-10,10),0,20,$fontcolor,FONT_URL."/asd.ttf","asds");//返回数组
////        imagestring($img,5,0,0,"asd",$fontcolor);
////        }
////        for($i=0;$i<50;$i++){
////            $fontcolor=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
////            imageline($img,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200),mt_rand(0,200),$fontcolor);//划线
////        }
////        for($i=0;$i<1000;$i++){
////            $fontcolor=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
////            imagesetpixel($img,mt_rand(0,200),mt_rand(0,200),$fontcolor);
////        }
//        imagepng($img);
//
//    }
//    function setBgcolor($r,$g,$b){
//        $this->red=$r;
//        $this->green=$g;
//        $this->blue=$b;
//        $bgcolor=[$this->red,$this->green,$this->blue];
//        return $bgcolor;
//    }
//    function setFontcolor($r,$g,$b){
//        $fontColor=[$r,$g,$b];
//        return $fontColor;
//    }
//}
class code{
    public $width=150;
    public $height=50;
    public $zhongzi='123456789asdfzxcqwe';
    public $strlen=4;
    public $url;
    public $codename;
    private function setCanvas(){
        $this->img=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->img,0,0,$this->setcolor());
    }
    private function setcolor($type='back'){
        $r=$type=='back'?mt_rand(0,120):mt_rand(130,255);
        $g=$type=='back'?mt_rand(0,120):mt_rand(130,255);
        $b=$type=='back'?mt_rand(0,120):mt_rand(130,255);
        $color=imagecolorallocate($this->img,$r,$g,$b);
        return $color;
    }
    public function setCon(){
        $this->setFont();
        $this->size=mt_rand(20,30);
        $this->angle=mt_rand(-15,15);
        for($i=0;$i<$this->strlen;$i++){
            $arr=imagettfbbox($this->size,$this->angle,$this->url,$this->str[$i]);
            $space=mt_rand(-5,5)+$i*($this->width/$this->strlen);
            $space2=$arr[1]-$arr[5]+($this->height-$this->size)/2;
            imagettftext($this->img,$this->size,$this->angle,$space,$space2,$this->setcolor('b'),$this->url,$this->str[$i]);//返回数组
        }
    }
    private function setFont(){
        $str='';
        for($i=0;$i<$this->strlen;$i++){
            $str.=$this->zhongzi[mt_rand(0,strlen($this->zhongzi)-1)];
        }
        $this->str=$str;
        $_SESSION[$this->codename]=$str;
    }
    private function setLine(){

        $this->lineNum =mt_rand(4,15);
        for($i=0;$i<$this->lineNum;$i++){
            $xStar=mt_rand(0,$this->width/3);
            $yStar=mt_rand(0,$this->height);
            $xEnd=mt_rand(2*$this->width/3,$this->width);
            $yEnd=mt_rand(0,$this->height);
            imageline($this->img,$xStar,$yStar,$xEnd,$yEnd,$this->setcolor());//划线
        }
    }
    private function setPix(){
        for($i=0;$i<80;$i++){
            $x=mt_rand(0,$this->width);
            $y=mt_rand(0,$this->height);
            imagesetpixel($this->img,$x,$y,$this->setcolor('1'));
        }
    }
    public function out(){
        header("content-type:image/png");
        $this->setCanvas();
        $this->setCon();
        $this->setLine();
        $this->setPix();
        imagepng($this->img);
    }

}