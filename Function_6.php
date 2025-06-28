//Write a php code to sort a array using a function

<?php
function sort_arr(){
  $arr=array("viru" => "87","viren" => "89","virya" => "88");
  arsort($arr);
foreach($arr as $x=>$x_value){
  echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
return $arr;
  }
sort_arr();
   ?>
