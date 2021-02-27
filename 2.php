<?php

for ($i=0;$i<=9;$i++) {
    $msg = match($i) { //match case to check the number stored in the variable
          0 => "zero", //if it is 0 the out will be its equivalent in english zero
          1 => "one", //if it is 1 the out will be its equivalent in english one
          2 => "two", //if it is 2 the out will be its equivalent in english two
          3 => "three", //if it is 3 the out will be its equivalent in english three
          4=> "four", //if it is 4 the out will be its equivalent in english four
          5 => "five", //if it is 5 the out will be its equivalent in english five
          6 => "six", //if it is 6 the out will be its equivalent in english six
          7=> "seven", //if it is 7 the out will be its equivalent in english seven
          8 => "eight", //if it is 8 the out will be its equivalent in english eight
          9 => "nine", //if it is 9 the out will be its equivalent in english nine
          default => "not valid", //if it is not in this interval [0 9] the out will be not valid
        };

    echo "$i => $msg <br>";
}


 ?>