<?php
    $numbers = [0, 1, 21, 3,77,29,322,876,7, 8, 9, 153, 370, 44, 407,9,10];

    //function to count digit
    function count_digit($x){
        $key=$x;
        $digit = 0;
        if($x==0){
            $digit = 1;
        }
        while($x>0){
            $x = intdiv($x,10);
            $digit++;
        }
        return $digit;
    }

    

    function check_armstrong($key,$digit){
        if($key <0){
            return false;
        }


        if($key >=1 && $key<=9){
            return true;
        }

        $org = $key;
        $power=0;
        $sum=0;

        while($key>0){
            $ld = $key%10;
            $power = pow($ld,$digit);
            $sum= $sum + $power;
            $key = intdiv($key, 10);
        }
        return $org==$sum;
    }

    // function is_armstrong($org,$sum){
    //     if($org==$sum){
    //         return true;
            
    //     }else{
    //         return false;
    //     }
    // }
    
    $is_armstrong = 0;
    $is_armstrongArray = [];
    $not_armstrong = 0;
    $not_armstrongArray = [];

    foreach($numbers as $key){
        $digit = count_digit($key);
        if(check_armstrong($key,$digit)){
            $is_armstrong++;
            $is_armstrongArray[] = $key;
        }else{
            $not_armstrong++;
            $not_armstrongArray[] = $key;
        }
    }

    echo "total number of armstrong numbers $is_armstrong\n";
    echo "total number of not armstrong numbers $not_armstrong\n";

    print_r($numbers).PHP_EOL;
    echo "Total Armstrong numbers: $is_armstrong\n";
    echo "Array of Armstrong numbers:\n";
    print_r($is_armstrongArray).PHP_EOL;
    echo "Total Not Armstrong numbers: $not_armstrong\n";
    echo "Array of Not Armstrong numbers:\n";
    print_r($not_armstrongArray).PHP_EOL;
