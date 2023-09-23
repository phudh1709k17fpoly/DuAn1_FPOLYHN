<?php 
// last
 $class = new work;
 $laststar = $class->viewLimitOne('products','id',1);
 $lastend = $laststar['id'] - 2;
 $last = $class->viewNews('products','id',$lastend,$laststar['id']);

 //more 
 $more_star = $lastend - 1;
 $more_end = $lastend - 3;

 $more = $class->viewNews('products','id',$more_end,$more_star);


 //end 
 $end_star = $more_end- 1;
 $end_end = $more_end - 3;
 $end = $class->viewNews('products','id',$end_end,$end_star);
?>