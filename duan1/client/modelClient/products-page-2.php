<?php
$class = new work;
$public = $class->paging('products',12,12);
$quantity = $class->count_number('id','products');

?>