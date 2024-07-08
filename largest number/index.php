<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;


if($num1 > $num2 && $num1 > $num3){
  echo " The num1 is the largest Number: $num1";
}
elseif ($num2 > $num1 && $num2 > $num3){
  echo "The num2 is the largest Number: $num2";
}
elseif ($num3 > $num1 && $num3 > $num2){
  echo "The num3 is the largest Number: $num3";
}
else {
  echo "All Number are equal";
}

