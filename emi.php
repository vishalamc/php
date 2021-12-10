<?php
    $p = 20000;
    $r = 10;
    $t = 4;
$emi;
 
    // one month interest
    $r = $r / (12 * 100);
     
    // one month period
    $t = $t * 12;
     
    $emi = ($p * $r * pow(1 + $r, $t)) /
                  (pow(1 + $r, $t) - 1);

echo $emi;
$re=pow(2,3);
echo $re;

?>

