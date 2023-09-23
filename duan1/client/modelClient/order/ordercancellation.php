<?php

$class = new work;
if(isset($_SESSION['user'])){
    $public = $class->publicOrder('order','od_status',0,$_SESSION['user'],'od_id');

    if(empty($public)){
        echo("<script>location.href ='?ctl=underfail';</script>");
     }
}else{
    echo("<script>location.href ='../login';</script>");
}
