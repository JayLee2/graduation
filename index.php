<?php
session_start();
header('content-type:text/html;charset=utf-8');
//单入口文件
//入口
define('COME','YES');
//定义常用路径   文件路径（include）  web服务器路径（img）
//var_dump($_SERVER);
//文件路径
//服务器的根目录
define('HTTP_PATH',$_SERVER['DOCUMENT_ROOT']);
//应用的根目录
define('APP_PATH',substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],'/')));
define('LIBS_PATH',APP_PATH.'/libs');
define('MOD_PATH',APP_PATH.'/modules');
define('STA_PATH',APP_PATH.'/static');
define('FONT_PATH',STA_PATH.'/font/asd.ttf');
define('TEM_PATH',APP_PATH.'/template');
define('UPLOAD_PATH',APP_PATH.'/upload');
define('SMAR_PATH',LIBS_PATH.'/smarty');
//服务器的路径
//协议
define('HTTP',strtolower(strchr($_SERVER['SERVER_PROTOCOL'],'/',true)));
//主机地址
define('HOST',$_SERVER['HTTP_HOST']);
//项目的路径
define('APP_URL',substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/')));
//服务器的项目路径
define('HTTP_URL',HTTP.'://'.HOST.APP_URL);
//静态目录的路径
define('STA_URL',HTTP_URL.'/static');
define('CSS_URL',STA_URL.'/css');
define('JS_URL',STA_URL.'/js');
define('FONT_URL',STA_URL.'/font/asd.ttf');
define('IMG_URL',STA_URL.'/img');
define('ICONFONT_URL',STA_URL.'/iconfont');
define('MUSIC_URL',STA_URL.'/music');
define('SERF_URL',HTTP.'://'.HOST.$_SERVER['REQUEST_URI']);
//mvc   view(html+css+js) controller() model(数据)
//控制器
include_once LIBS_PATH.'/route.class.php';
include_once SMAR_PATH.'/Smarty.class.php';
include_once LIBS_PATH.'/main.class.php';
include_once LIBS_PATH.'/functions.php';
$config=include_once APP_PATH.'/config.php';
include_once LIBS_PATH.'/db.class.php';
include_once LIBS_PATH.'/tree.class.php';
$root=new route();
$root->set();