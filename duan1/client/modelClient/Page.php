<?php
 $class = new view;
 $productsPublic_page1 = $class->viewOderId($_GET['id'],'products');
 $class = new view;
 $cateName = $class->viewCateOderId($_GET['id'],'categories');
?>