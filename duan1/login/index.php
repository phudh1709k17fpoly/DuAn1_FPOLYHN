<?php
include_once 'header.php';
include_once '../model/mahoa.php';
include_once '../model/myClass.php';
if(isset($_GET['ctl'])){
  $controller = $_GET['ctl'];
 switch($controller){
   case 'createAcc':
    include_once 'modelLogin/createAcc.php';
    if(!empty($sql)){
     pdo_execute($sql);
     $alret = 'Đăng ký thành công';
    }
    include_once 'view/create.php';
    break; 
 }
}else{
    
   include_once 'modelLogin/handle.php';

    include_once 'view/login.php';
}
include_once 'footer.php';
?>


      



