<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $file = $_FILES['img'];
   $filename = $file["name"];
   $id_products = $_GET['id'];
  if($file['size'] != 0){
    $list_name_img = ['jpg', 'jpeg', 'gif', 'png', 'svg', 'webp'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(in_array($ext,$list_name_img)){
        move_uploaded_file($file['tmp_name'], "./img/".$filename);
        $class = new products;
        $class->upload($filename,$id_products);
        echo("<script>location.href ='?ctl=products';</script>"); 
    }else{
        $error['empty'] = "File này không phải là ảnh";
    }
  }else{
    $error['empty'] = "Vui lòng chọn 1 file";
  }
 }
?>