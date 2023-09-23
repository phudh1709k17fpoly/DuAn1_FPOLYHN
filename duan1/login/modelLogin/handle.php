<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $class =  new view;
  $username =  $_POST['username'];
  $password =  $_POST['password'];

  $ketqua = $class->view_user($username);
 if(!empty($ketqua['username'])){
  if(password_verify($password,$ketqua['password'])){
    $_SESSION['user'] = $ketqua['id'];
    if($ketqua['role'] == 0){
      header("location:../client/");
    }else if($ketqua['role'] == 1){
      header("location:../admin/");
    }
  }else{
    $erro['password'] = "Mật khẩu không đúng";
  };
 }else{
  $erro['username'] = "Tài khoản Không đúng";
 }
}
?>