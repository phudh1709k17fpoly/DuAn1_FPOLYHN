<?php
 $class = new caterories;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     if(empty($_POST['name'])){
         $error['name'] = "Vui lòng nhập lại trường này";
     }
    if(!isset($error)){
       $class->add($_POST['name']);
       echo("<script>location.href = '?ctl=view_cate';</script>");
    }
 }
?>