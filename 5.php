<?php 
$numbers=[1,2,3,4,2,1];
for ($i=0; $i<=count($numbers)-1; $i++) {
    for ($n=$i+1;$n<=count($numbers)-1;$n++) {
        if ($numbers[$i]==$numbers[$n]) {
            unset($numbers[$n]);
        } 

    };
 
};

var_dump($numbers);


?>