<?php
$class = new work;

$public = $class->viewLimit('products','id',10);

$quantity['all'] = count($public); 
?>