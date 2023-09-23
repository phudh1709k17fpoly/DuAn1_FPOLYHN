<?php

if(isset($_POST['search'])){
    $max = trim($_POST['max'],'$');
    $min = trim($_POST['min'],'$');
    $sql = "SELECT * FROM `products` WHERE `price` BETWEEN $min AND $max ORDER BY price ASC LIMIT 10";
    $public = pdo_query($sql);
}


?>