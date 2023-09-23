<?php

  $class = new view;
  $public = $class->viewAll('products'); 


  $class = new view;
  $public2 = $class->viewImage();

// commet
  if(isset($_GET['img'])){
    $class = new order;
    $public3 = $class->comment($_GET['img']);
  }
?>