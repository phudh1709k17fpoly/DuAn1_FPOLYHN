<?php
 $class = new products;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $id = $_POST['id'];

  $name = $_POST['name'];

  $price = $_POST['price'];

  $detail = $_POST['detail'];

  $quantity = $_POST['quantity'];

  $sale = $_POST['sale'];

  $status = $_POST['status'];

  $id_cate = $_POST['id_cate'];

  $file = $_FILES['img'];

  $filename = $file['name'];

  $imgold = $_POST['img_old'];

  if (empty($name)) {
    $error['name'] = "Vui lòng nhập lại trường này";
  }

  ///------////

  if (empty($price)) {
    $error['price'] = "Vui lòng nhập lại trường này";
  }

  ///------////

  if (empty($detail)) {
    $error['detail'] = "Vui lòng nhập lại trường này";
  }
  
  ///------////
  
  if (empty($quantity)) {
    $error['quantity'] = "Vui lòng nhập lại trường này";
  }
  
  ///------////
  
  if (empty($sale)) {
    $error['sale'] = "Nếu không có khuyến mại cho sản phẩm vui lòng nhập 0.0";
  }

  // check validator categories 
  if($id_cate == 0){
      $error['id_cate'] = "Vui lòng nhập lại trường này";
    }
  $img='';
  if($file['size'] <= 0){
      $img = $imgold;
  }else{
      $img = $filename;
  }
  $class = new products;
    if(!isset($error)){
      $list_name_img = ['jpg', 'jpeg', 'gif', 'png', 'svg', 'webp'];
      $ext = pathinfo($img, PATHINFO_EXTENSION);
      if (!in_array($ext,$list_name_img)){
        $error_img['img'] = "File này không phải là ảnh";
      }else{
       move_uploaded_file($file['tmp_name'], "./img/".$img);
       $class->edit($_GET['id'], $id, $name, $price, $detail, $quantity, $sale, $status,$img,$id_cate);
       echo("<script>location.href ='?ctl=view_products';</script>");
      }
    }
}

$class = new view;
$value = $class->view_value($_GET['id'],'products');
$public = $class->viewAll('categories'); 

?>