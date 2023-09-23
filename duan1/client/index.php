<?php
include_once '../model/pdo.php';
include_once './modelClient/Myclass.php';
include_once './modelClient/headerView.php';
include_once 'header.php';

 /// nav menu
if(isset($_GET['ctl'])){
    $controller = $_GET['ctl'];
    switch($controller){
        case 'products':
         include_once './modelClient/headerView.php';
         include_once 'modelClient/products-page-1.php';
         include_once 'view/productsAll.php';
    break;
        case 'order':
        include_once './modelClient/order/main.php';
        include_once './view/order/main.php';
    break;

    case 'ordercancellation':
        include_once './modelClient/order/ordercancellation.php';
        include_once './view/odersAll.php';
    break;

    case 'sreachPrice':
        include_once './modelClient/find.php';
        include_once 'view/productsAll.php';
    break;
    
    }
}else{
    include_once './modelClient/homeView.php';
    include_once './modelClient/saleProducts.php';
    include_once './modelClient/newsProducts.php';
    include_once './modelClient/soldProducts.php';
    include_once './modelClient/viewProducts.php';
    include_once './view/home.php';
}
// chức năng
if(isset($_GET['ctl'])){
    $controller = $_GET['ctl'];
    switch($controller){
    case 'search':
        include_once './modelClient/searchProducts.php';
        include_once 'view/productsAll.php';    
    break;

    case 'productsNews':
        include_once './modelClient/newsProducts_All.php';
        include_once 'view/productsAll.php';
    break;

    case 'productsSold':
        include_once './modelClient/soldProducts_All.php';
        include_once 'view/productsAll.php';
    break;

    case 'productsSale':
        include_once './modelClient/saleProducts_All.php';
        include_once 'view/productsAll.php';
    break;
    case 'detailsProducts':
      include_once './modelClient/detailsProducts.php';
      include_once './view/productDetails.php';
    break;
    case 'infor':
     include_once './view/infor.php';
    break;
    case 'detailsOder':
        include_once './modelClient/oderDetails.php';
        include_once './view/oderdetails.php';
    break;
    case 'contentOder':
        include_once './modelClient/odersAll.php';
        include_once './view/odersAll.php';
    break;
    case 'form_address':
        include_once './view/address/add.php';
    break;

    case 'editAddress':
        include_once './view/address/edit.php';
    break;
    case 'deleteAddress':
        include_once './view/address/delete.php';
    break;
    case 'logout':
        include_once './modelClient/logout.php';
    break;
    case 'success':
        include_once './view/order/back.php';
    break;
    case 'underfail':
        include_once './view/order/errordelete.php';
    break;
    case 'underfailorder':
        include_once './view/order/errorOrderAll.php';
    break;
    case 'uploadOrder':
        include_once './modelClient/order/uploadOrder.php';
    break;
    case 'deleteOrder':
        if(isset($_GET['id'])){
        unset($_SESSION['order'][$_GET['id']]);
        echo("<script>location.href ='?ctl=order';</script>");
        }
    break;
    }
}
// categories
if(isset($_GET['ctl'])){
    $controller = $_GET['ctl'];
    switch($controller){
    case 'categories-1':
            include_once 'modelClient/Page.php';
            include_once 'view/catePage.php';
    break;
    case 'categories-2':
        include_once 'modelClient/Page.php';
        include_once 'view/catePage.php';
    break;

    case 'categories-3':
        include_once 'modelClient/Page.php';
        include_once 'view/catePage.php';
    break;
    case 'categories-4':
        include_once 'modelClient/Page.php';
        include_once 'view/catePage.php';
    break;
    case 'categories-5':
        include_once 'modelClient/Page.php';
        include_once 'view/catePage.php';
    break;
    case 'products-page-2':
        include_once 'modelClient/products-page-2.php';
        include_once 'view/productsAll.php';
    break;
    case 'products-page-3':
        include_once 'modelClient/products-page-3.php';
        include_once 'view/productsAll.php';
    break;
    case 'products-page-4':
        include_once 'modelClient/products-page-4.php';
        include_once 'view/productsAll.php';
    break;
    }
}
include_once 'footer.php';
?>