<?php
$class = new work;
$public = $class->viewLimit('products','sold',12);

$quantity['all'] = count($public); 
?>