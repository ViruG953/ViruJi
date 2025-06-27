//write a php to create a function which add,mul,sub,mod,div 3 numbers and display output

<?php
function calci($num1,$num2,$num3){
$add=$num1+$num2+$num3;
$sub=$num1-$num2-$num3;
$mul=$num1*$num2*$num3;
$div=$num1/$num2/$num3;
$mod=$num1%$num2%$num3;
echo"The addition is=".$add;
echo"The addition is=".$sub;
echo"The addition is=".$mul;
echo"The addition is=".$div;
echo"The addition is=".$mod;
}
calci(5,3,9);
?>
