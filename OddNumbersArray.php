<?php
function oddNumbers(){
  for ($i=1; $i<10; $i+=2){
    echo $i;
    $arr = [];
    array_push($arr,$i);
    var_dump($arr);
  }
}
oddNumbers();
?>
<?php
  // $arr = [1,23,4,5,6];
  // $arr2 = array(1,23,4,5,6);
  $arr = [];
  array_push($arr,1,2);
      var_dump($arr);
 ?>
