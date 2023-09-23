<?php
$class = new view;

$public = $class->viewpProductsId($_GET['id'],'products');

$img = $class->viewImg($_GET['id'],'img');

$careAbout = $class->viewOderId($public['id_cate'],'products');
?>