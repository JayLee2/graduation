<?php

class admin extends main{
    function init(){
        if(!isset($_SESSION["login"])){
            echo "<script>alert('你还没有登录');location.href='index.php?m=login&f=login'</script>";
            exit;
        }
        $this->smarty->assign('user',$_SESSION['username']);
        $this->smarty->display('admin/admin.html');
    }

}
