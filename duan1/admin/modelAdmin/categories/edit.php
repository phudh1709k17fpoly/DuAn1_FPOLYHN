<?php

 $class = new caterories;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['condition']) && $_POST['condition'] !=0 && $_POST['condition'] !=1 ){
      $error['condition'] = "Vui lòng nhập lại trường này";
    }
    if(!isset($error)){
        $class->edit($_GET['id'],$_POST['name'],$_POST['condition']);
       echo("<script>location.href = '?ctl=view_cate';</script>");
    }
}

 $class = new view;
 $public = $class->view_value($_GET['id'],'categories');
?>