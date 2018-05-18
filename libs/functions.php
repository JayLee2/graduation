<?php
function P($parm){
    return $_POST[$parm];
}
function G($parm){
    return $_GET[$parm];
}
function sql($parm){
    return addslashes(htmlspecialchars($parm));
}
