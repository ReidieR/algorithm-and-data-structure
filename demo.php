<?php

function finalPrices($prices) {
    $len = count($prices);
    $ans = [];
    for($i=0;$i<$len;$i++){
        $j = $i+1;
        while($j<$len){
            if($prices[$j]<=$prices[$i]){
                $p = $prices[$i]-$prices[$j];
                array_push($ans,$p);
                break;
            }
            $j++;
        }
        if($j>=$len){
            array_push($ans,$prices[$i]);
        }
    }
    return $ans;
}
    
$a = [10,1,1,6];

$res = finalPrices($a);
print_r($res);







