<?php
class main{
    function __construct(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $this->smarty=$sobj;
    }
}
?>