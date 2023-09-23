<?php 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $id = $_POST['id'];
   
    $name = $_POST['name'];

    $email = $_POST['email'];

    $username = $_POST['username'];

    $password = $_POST['password'];

    $role = $_POST['role'];

    $img = $_POST['img'];

    $password_mahoa = $_POST['password_mahoa'];


    if($role == 10){
        $error['role'] = "Vui lòng nhập trường này";
    }else{
        $error['role'] ='';
    }
    if(empty($error['role'])){
        $class = new client;
        $class->edit($_GET['id'],$id,$name,$email,$username,$password,$role,$img,$password_mahoa);
        echo("<script>location.href ='?ctl=user';</script>");

    }
 }
 
 $class = new view;
 $iteam = $class->view_value($_GET['id'],'user'); 
?>