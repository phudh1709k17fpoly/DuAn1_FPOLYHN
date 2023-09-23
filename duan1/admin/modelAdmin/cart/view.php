<?php
if(isset($_POST['update_xndh'])){
    $updateStatus = $_POST['status'] + 1;
    $sql = "UPDATE `order` SET  `od_status` = $updateStatus WHERE od_id = $_GET[id]";
    pdo_execute($sql);
    echo("<script>location.href ='?ctl=order';</script>");
  }
  if(isset($_POST['update_xncb'])){
      $updateStatus = $_POST['status'] + 1;
      $sql = "UPDATE `order` SET  `od_status` = $updateStatus WHERE od_id = $_GET[id]";
      pdo_execute($sql); 
      echo("<script>location.href ='?ctl=order';</script>");
  }
  
  $class = new order;
  $public = $class->view();
?>