<?php
    $arr = [3,4,5,6,8,9,10];

    //because in sn elements we have +1 elements ...
    //we are finding the sum including the missing element 
    //there are 7 element in the array...but we have to fing sum of nth elemnt 

    $n = count($arr)+1;  

    $d=($arr[1]-$arr[0]);
    $a=$arr[0];

    $Nth_sum = ($n/2)*(2*$a + ($n-1)*$d);

    $arr_sum = 0;
    for($i=0;$i< count($arr) ;$i++){
        $arr_sum+=$arr[$i];
    }

    $missing_ele = $Nth_sum-$arr_sum;
    echo "missing element = ".$missing_ele.PHP_EOL;