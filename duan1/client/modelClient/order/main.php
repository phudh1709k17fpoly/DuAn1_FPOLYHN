<?php
$class = new work;

$total = 0;

$total_sale = 0;

// sử lý thêm
if(isset($_SESSION['user'])){
    if(!isset($_SESSION['order'])){
        $_SESSION['order'] = array();
    }
    if(isset($_SESSION['order']) && !empty($_POST['quantity'])){
        function update($check){
           foreach($_POST['quantity'] as $id => $quantity){
               if($check){
                if(empty($_SESSION['order'][$id])){
                       $_SESSION['order'][$id] = $quantity;
                      }else{
                       $_SESSION['order'][$id] += $quantity;
                      }
               }else{
                       $_SESSION['order'][$id] = $quantity;
                   }
               }
           }
       }
}else{
    echo("<script>location.href ='../login';</script>");
}


if(isset($_POST['submitOrder'])){
   update(true);
}

// hiện thị sản phẩm
if(isset($_SESSION['order'])){
    $ArraysNumber=implode(",",array_keys($_SESSION['order']));
    if(!empty($ArraysNumber)){
        $products = $class->publicArrays('products','id',$ArraysNumber);
    }else{
        $error['order'] = "Hiện tại giỏ hàng chưa có sản phẩm nào";
    }
}
  // update
if(isset($_POST['update'])){
    update(false);
 echo("<script>location.href ='?ctl=order';</script>");
}
// submit
if(isset($_POST['submit'])){
    if(isset($_GET['id'])){
        $code  = rand();
        $time = time();
        $quantityProducts = count($products);
        var_dump($quantityProducts);
        $sql = "INSERT INTO `order`(`id_address`,`id_user`,`od_totalsale`, `od_totalprice`,`od_quantity`,`od_codebill`, `od_creatadate`) VALUES
        ($_GET[id],$_SESSION[user],$_POST[sale],$_POST[total],$quantityProducts,$code,$time)";
        pdo_execute($sql);
        $sql_id_order = "SELECT MAX(od_id) as id FROM `order`";
        $id_order = pdo_query_one($sql_id_order);
        foreach($products as $value){
         $quantity  = $_SESSION['order'][$value['id']];
         $sql_detail = "INSERT INTO `oderdetails`(`id_order`, `id_pr`, `dts_sale`, `dts_price`, `dts_quantity`,`dts_createdate`) VALUES ($id_order[id],$value[id],$value[sale],$value[price],$quantity,$time)";
         pdo_execute($sql_detail);
        }
        foreach($products as $value){
            $quantity_order  = $_SESSION['order'][$value['id']];
            $number = $value['quantity'] - $quantity_order;
            $updateQuantity = "UPDATE `products` SET `quantity` = $number WHERE `id` = $value[id]";
            pdo_execute($updateQuantity);
        }
        echo("<script>location.href ='?ctl=success';</script>");
    }else{
      $error['address']  = "Vui lòng chọn địa chỉ";
    }
}


?>
