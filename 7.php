<?php  


$x=3; $y=$x++;  //x= 3  y=3 then x=4
$y+=++$x; // x=5 then y=y+5> y=8 


if($y==7) { //not true
    $x++;
    echo "$x <br>";
} elseif ($y==8) { //true so the output will be 5-1=4
    $x--;
    echo "$x <br>";

} elseif ($y==9) { //not true
    $x+=2;
    echo "$x <br>";

} else { //not true
    $x=0;
    echo "$x <br>";

}






?>