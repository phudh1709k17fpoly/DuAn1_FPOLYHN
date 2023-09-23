<?php
$class = new work;

$class->delete('addres_user',$_GET['id']);

echo("<script>location.href='?ctl=order';</script>");
?>