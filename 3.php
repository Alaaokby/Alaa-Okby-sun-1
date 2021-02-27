<?php 

for($i=1; $i<=4 ;$i++) { //looping the first 4 pattern
    $msg= match($i) {
        1=> "*",
        2=> "**",
        3=> "***",
        default=> "****",

    };
    echo "$msg <br>"; // to print each pattern 

    if ($i==4) { //when the counter reach 4 means the first 4 patterns done so i will make countdown loop
        for ($i=4; $i>=1; $i--) { //countdown loop to print the other 4 patterns
            $msg= match($i) {
                4=> "****",
                3=> "***",
                2=> "**",
                default=> "*",
            };
            echo "$msg <br>";
        };
        break;
    };
    };


  

?>