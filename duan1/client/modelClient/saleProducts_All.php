<?php
$class = new work;

$public = $class->viewLimit('products','sale',10);

$quantity['all'] = count($public); 
?>