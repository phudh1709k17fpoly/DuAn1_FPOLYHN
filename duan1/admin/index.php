<?php
session_start();
 include_once '../model/MyClass.php';
 include_once 'header.php';
if(isset($_GET['ctl'])){
    $controller = $_GET['ctl'];
   switch($controller){
    /// catetgories
    case 'categories':
        include_once './modelAdmin/categories/view.php';
        include_once './view/categories/view.php';
        break;
        case 'add_cate':
        include_once './modelAdmin/categories/add.php';
        include_once './view/categories/add.php';
        break;
        case 'edit_cate';
        include_once './modelAdmin/categories/edit.php';
        include_once './view/categories/edit.php';
        break;
    ///-----------------------------------------////
    /// products
    case "products";
    include_once './modelAdmin/products/view.php';
    include_once './view/products/view.php';
    break;
    case 'upload':
        include_once './modelAdmin/products/upload.php';
        include_once './view/products/upload.php';
    break;
    case "add_products";
    include_once './modelAdmin/products/add.php';
    include_once './view/products/add.php';
    break;
    case 'edit_products':
        include_once './modelAdmin/products/edit.php';
        include_once './view/products/edit.php';
     break; 
     case 'deleteComment':
        $class = new order;
        $class->deletecomment($_GET['id']);
        echo("<script>location.href ='" . $_SERVER['HTTP_REFERER']."';</script>");
        break;
    case 'delete_products':
    $class = new delete;
    $class->delete($_GET['id'],'products');
    echo("<script>location.href ='?ctl=products';</script>");
     break;
    case 'deleteimage':
        $class = new order;
        $class->deleteimage($_GET['id']);
        echo("<script>location.href ='" . $_SERVER['HTTP_REFERER']."';</script>");
     break;
      ///-----------------------------------------////
      // user
      case 'user':
        include_once './modelAdmin/admin/view.php';
        include_once './view/user/view.php';
     break;
     case 'editUser':
        include_once './modelAdmin/admin/edit.php';
        include_once './view/user/edit.php';
     break;
     // cart 
     case 'order':
        include_once './modelAdmin/cart/view.php';
        include_once './view/cart/view.php';
     break;
     case 'userOrder':
        include_once './modelAdmin/cart/inforkh.php';
        include_once './view/cart/inforkh.php';
     break;
     case 'logout':
        unset($_SESSION['user']);
        echo("<script>location.href ='?';</script>");
    break;
 }
}

// HOME + THỐNG KÊ
if(!isset($_GET['ctl'])){
    include_once './view/static.php';
}

include_once 'footer.php';
?>