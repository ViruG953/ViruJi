//Write a function to check whether a number is prime or not in php.

<?php
function is_or_not_prime($num){
echo"ENTER A NUMBER=".$num;
  if($num/$num==0 or $num/1==0){
echo"IT IS A PALINDROME!!!!";
  }
  else{
    echo"IT IS NOT PALINDROME";
  }
}
is_or_not_prime(17); //It is a prime number
?>
