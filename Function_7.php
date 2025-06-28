//write a php function for variable number of arguments

<?php
function sumMyNumbers(...$var_args) {
  $num = 0;
  $len = count($var_args);
  for($i = 0; $i < $len; $i++) {
    $num += $var_args[$i];
  }
  return $num;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);//29
echo $a;
?>
