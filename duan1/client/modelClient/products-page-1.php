<?php

$class = new work;

$public = $class->paging('products',12,0);

$quantity = $class->count_number('id','products');

?>