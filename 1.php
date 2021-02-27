<?php
$numbers=[2,3,1];
if($numbers[0]>$numbers[1] && $numbers[0]>$numbers[2]) { //check if the first number of the array is the max
  $max=$numbers[0]; //assign it to the variable
  if ($numbers[1]>$numbers[2]) { //to check which one of the other two is the min
      $min=$numbers[2]; //assign it to the variable
  } else {
      $min=$numbers[1]; 
  }
} elseif ($numbers[1]>$numbers[0] && $numbers[1]>$numbers[2]) { //check if the second number of the array is the max
    $max=$numbers[1]; //assign it to the variable
    if ($numbers[0]>$numbers[2]) { //to check which one of the other two is the min
        $min=$numbers[2]; //assign it to the variable
    } else {
        $min=$numbers[0];
    }
} else {  //check if the first number of the array is the max
    $max=$numbers[2];  //assign it to the variable
    if ($numbers[0]>$numbers[1]) { //to check which one of the other two is the min
        $min=$numbers[1]; //assign it to the variable
    } else {
        $min=$numbers[0];
    }
}
echo "$max <br>"; //printing the max number
echo $min; //printing the min number







?>