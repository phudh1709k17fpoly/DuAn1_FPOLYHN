<?php
class view{
    function viewAll($table){
       $sql = "SELECT * FROM `$table`";
       $public = pdo_query($sql);
       return $public;
    }
    
    function viewLimit($table,$by,$limit){
    $sql = "SELECT * FROM `$table` ORDER BY '$by' ASC LIMIT $limit";
    $ketqua = pdo_query($sql);
    return $ketqua;
     }

     function viewOderId($idGet,$table){
      $sql = "SELECT * FROM `$table` WHERE `id_cate`=$idGet";
      $ketqua = pdo_query($sql);
      return $ketqua;
     }

     function viewCateOderId($idGet,$table){
      $sql = "SELECT * FROM `$table` WHERE `id`= $idGet";
      $ketqua = pdo_query($sql);
      return $ketqua;
     }

     function viewpProductsId($idGet,$table){
      $sql = "SELECT * FROM `$table` WHERE `id`= $idGet";
      $ketqua = pdo_query_one($sql);
      return $ketqua;
     }
     function viewImg($idGet,$table){
      $sql = "SELECT * FROM `$table` WHERE `id_pr`= $idGet";
      $ketqua = pdo_query($sql);
      return $ketqua;
     }

     function checkCart($table,$name,$id_user){
      $sql = "SELECT * FROM `$table` WHERE `name_products` like '$name' AND `id_user` = $id_user ";
      $ketqua = pdo_query_one($sql);
      return $ketqua;
     }
}


class work {
   function search($keyname,$table,){
      $sql = "SELECT * FROM `$table` WHERE `name` like '%$keyname%' ";
      $ketqua = pdo_query($sql);
      return $ketqua;
     }
   function viewLimit($table,$by,$limit){
      $sql = "SELECT * FROM `$table` ORDER BY $by DESC LIMIT $limit";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }
   function viewLimit2($id_user){
      $sql = "SELECT *,products.id as id_products  FROM products INNER JOIN cart_products ON products.id = cart_products.id_prd WHERE cart_products.id_user = $id_user ORDER BY createTime DESC LIMIT 10";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }
   function viewLimit3($id_user,$id_cart){
      $sql = "SELECT * FROM `detailsoder` WHERE id_user = $id_user AND id_cart = $id_cart  ORDER BY id DESC LIMIT 10";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }

   function viewLimitOne($table,$by,$limit){
      $sql = "SELECT * FROM `$table` ORDER BY `$by` DESC LIMIT $limit";
      $ketqua = pdo_query_one($sql);
      return $ketqua;
   }
   function viewNews($table,$by,$star,$end){
      $sql = "SELECT * FROM `$table` WHERE `$by` BETWEEN $star AND $end";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }
   function viewtop($table,$name_dk,$id_cate,$row,$limit){
      $sql = "SELECT * FROM `$table` WHERE `$name_dk` = $id_cate ORDER BY `$row` DESC LIMIT $limit";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }

   function paging($table,$numberPage,$count_number){
      $sql = "SELECT * FROM $table LIMIT $numberPage OFFSET $count_number";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }
   function count_number($by,$table){
      $sql = "SELECT COUNT($by) as 'all' FROM `$table`";
      $ketqua = pdo_query_one($sql);
      return $ketqua;
   }
   function delete($table,$id)
   {
    $sql = " DELETE FROM `$table` WHERE id = $id";
    pdo_execute($sql);
   }
   function publicdiachi($id_user){
      $sql = "SELECT * FROM `addres_user` WHERE id_user = $id_user";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }

    function publicArrays($table,$key,$arrayNumber)
   {
      $sql  = "SELECT * FROM `$table` WHERE `$key` IN ($arrayNumber)";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }
    function updateDate($id)
   {
      $sql = "SELECT * FROM `addres_user` WHERE id = $id";
      $ketqua = pdo_query_one($sql);
      return $ketqua;
   }

   function publicOrder($table,$key,$key2,$id_user,$key_desc)
    {
      $sql = "SELECT * FROM `$table` WHERE `$key` =  $key2 AND `id_user` = $id_user ORDER BY `$key_desc` DESC ";
      $ketqua = pdo_query($sql);
      return $ketqua;
    }

    function publicOrdermain($table,$key,$id_user,$key_desc)
    {
      $sql = "SELECT * FROM `$table` WHERE `$key` = $id_user AND od_status !=0  ORDER BY `$key_desc` DESC ";
      $ketqua = pdo_query($sql);
      return $ketqua;
    }
    
    function detailOrder($id)
   {
      $sql = "SELECT * FROM `oderdetails` INNER JOIN `products` ON oderdetails.id_pr = products.id WHERE oderdetails.id_order = $id";
      $ketqua = pdo_query($sql);
      return $ketqua;
   }

    function addressOrder($id)
   {
      $sql = "SELECT * FROM `order` INNER JOIN `addres_user` ON order.id_address =  addres_user.id WHERE order.od_id = $id";
      $ketqua = pdo_query_one($sql);
      return $ketqua;
   }
      public function comment($id){
       $sql = "SELECT *,user.id as idkh FROM `feedback` INNER JOIN `user` ON feedback.id_user = user.id WHERE id_pr = $id ORDER BY `feedback`.`id` DESC";
       $ketqua = pdo_query($sql);
       return $ketqua;
      }
}
?>