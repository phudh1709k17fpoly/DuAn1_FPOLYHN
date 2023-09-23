<?php
if($_GET['act']){
 switch($_GET['act']){
  case 'abort':
  $sql = "UPDATE `order` SET `od_status` = 0 WHERE od_id = $_GET[id]";
  pdo_execute($sql);
  echo("<script>location.href ='?ctl=ordercancellation';</script>");
  break;
  case 'replay':
    $sql = "UPDATE `order` SET `od_status` = 1 WHERE od_id = $_GET[id]";
    pdo_execute($sql);
    echo("<script>location.href ='?ctl=contentOder';</script>");
  break;
  case 'thanhcong':
    $sql = "UPDATE `order` SET `od_status` = 4 WHERE od_id = $_GET[id]";
    pdo_execute($sql);
    echo("<script>location.href ='?ctl=contentOder';</script>");
  break;
 }
}


?>