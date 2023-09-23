<?php

$class = new work;

if(isset($_SESSION['user'])){
    $public = $class->publicOrdermain('order','id_user',$_SESSION['user'],'od_id');

    if(empty($public)){
        echo("<script>location.href ='?ctl=underfailorder';</script>");
    }
}else{

    echo("<script>location.href ='../login';</script>");
}

?>