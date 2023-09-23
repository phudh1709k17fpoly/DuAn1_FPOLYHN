<?php
include_once 'pdo.php';

class view
{

  function viewAll($table)
  {
    $sql = "SELECT * FROM `$table`";

    $public = pdo_query($sql);

    return $public;
  }

  function view_one($key,$table)
  {
    $sql = "SELECT `$key` FROM `$table` ";

    $public = pdo_query_one($sql);

    return $public;
  }

  function view_value($idcheck,$table)
  {
    $sql = "SELECT * FROM `$table` WHERE id = $idcheck ";

    $public = pdo_query_one($sql);

    return $public;
  }

  function view_user($username){

    $sql = "SELECT * FROM `user` WHERE `username` like '$username' ";

    $public = pdo_query_one($sql);

    return $public;
    
  }

  public function viewImage()
  {
    $sql = "SELECT *,img.id as id_img FROM `img` INNER JOIN products ON img.id_pr = products.id ORDER BY img.id DESC";

    $public = pdo_query($sql);

    return $public;
  }
  
}
class delete{
  function delete($idcheck,$table){
   $sql = "DELETE FROM `$table` WHERE `id`=$idcheck";
   pdo_execute($sql);
  }
}
///
class caterories
{


  function add($name)
  {
    $date =  date("Y/m/d");
    $sql = " INSERT INTO `categories`(`name`,`createDate`) VALUES ('$name','$date') ";
    pdo_execute($sql);
  }
  function edit($idcheck, $name, $condition)
  {
    $sql = "UPDATE `categories` SET `id`='$idcheck',`name`='$name',`condition`='$condition' WHERE `id` = $idcheck ";
    pdo_execute($sql);
  }
}




class products
{
  function upload($link,$id){
    
    $sql = "INSERT INTO `img`(`link`,`id_pr`) VALUES ('$link','$id')";

    pdo_execute($sql);
  }

  function add($name, $price, $detail, $quantity, $sale,$img,$id_cate)
  {

    $sql = "INSERT INTO `products`(`name`, `price`, `detail`, `quantity`, `sale`,`img`,`id_cate`) 

    VALUES ('$name',$price,'$detail',$quantity,$sale,'$img',$id_cate)";

    pdo_execute($sql);

  }

  function edit($idcheck, $id, $name, $price, $detail, $quantity, $sale, $status,$img,$id_cate)
  {

    $sql = "UPDATE `products` SET `id`='$id',`name`='$name',`price`=$price,`detail`='$detail',`quantity`=$quantity,`sale`=$sale,`status`=$status,`img`='$img',`id_cate`=$id_cate WHERE `id` = $idcheck";

    pdo_execute($sql);
  }
}

class client{

function edit($idcheck,$id,$name,$email,$username,$password,$role,$img,$password_mahoa){

  $sql = "UPDATE `user` SET `id`=$id,`name`='$name',`username`='$username',`password`='$password',`email`='$email',`role`=$role,`img`='$img',`password_mahoa`='$password_mahoa' WHERE `id` = $idcheck";

  pdo_execute($sql);
  
}
}

class order{
 function view(){
  $sql = "SELECT * FROM `order` ";
  $ketqua = pdo_query($sql);
  return $ketqua ;
}
function inforkh($id_user,$id_address){
  $sql = "SELECT *,user.name as name_tk FROM `addres_user` INNER JOIN user ON addres_user.id_user = user.id WHERE user.id = $id_user AND addres_user.id = $id_address";
  $ketqua = pdo_query_one($sql);
  return $ketqua ;
}

 function comment($id){
  $sql =" SELECT *,feedback.id as idfb FROM `feedback` INNER JOIN user ON feedback.id_user = user.id WHERE id_pr=$id";
  $ketqua = pdo_query($sql);
  return $ketqua ;
}

function deletecomment($id)
{
  $sql ="DELETE FROM `feedback` WHERE id = $id ";
  pdo_execute($sql);
}

function deleteimage($id)
{
  $sql ="DELETE FROM `img` WHERE id = $id ";
  pdo_execute($sql);
}

 function static($table)
{
  $sql = "SELECT * FROM `$table` ";
  $ketqua = pdo_query($sql);
  return $ketqua ;
}
  
}
