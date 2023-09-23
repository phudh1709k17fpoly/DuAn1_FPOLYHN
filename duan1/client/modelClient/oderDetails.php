<?php

$class = new work;

$public = $class->detailOrder($_GET['id']);

$address = $class->addressOrder($_GET['id']);
?>