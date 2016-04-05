<?php
  $var = 0;
  $number =array(2,5,10,255,3);
   for($i= 0; $i<count($number); $i++){
        $var = $var + $number[$i];
   }
    $avg = $var/count($number);
      echo $avg;
 ?>
