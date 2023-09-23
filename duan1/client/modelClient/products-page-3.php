<?php
$class = new work;
$public = $class->paging('products',12,24);
$quantity = $class->count_number('id','products');

?>