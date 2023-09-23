<?php
 $class = new work;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
    $search = $_POST['search'];

    $public = $class->search($search,'products');

    $quantity['all'] = (count($public));
 } 
?>