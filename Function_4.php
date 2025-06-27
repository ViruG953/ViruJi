//php code to check factorial of a number
<?php
function facto($num){
  $factorial=1;
for($i=1;$i<=$num;$i++){
  $factorial*=$i;
}
if($num==0){
  echo"Factorial of 0 is 1";
}
  return $factorial;
}
echo"factorial of number=".facto(0);
?>
