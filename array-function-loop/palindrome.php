<?php
    $numbers = [1,10,4,22,204,504,202,11,88,87,20,15,25,151];

    function check_palindrome($num){
        $ld=0;
        $rev=0;
        $org = $num;

        while($num>0){
            $ld = $num%10;
            $rev = $rev*10 + $ld;
            $num = intdiv($num, 10);
        }

        return is_palindrome($rev,$org);
    }

    function is_palindrome($rev,$org){
        if($org==$rev){
            return true;
        }else{
            return false;
        }
    }

    $is_palindrome=0;
    $is_palindromeArray=[];
    $not_palindrome=0;
    $not_palindromeArray=[];

    foreach($numbers as $key){
        if(check_palindrome($key)){
            $is_palindrome++;
            $is_palindromeArray[]=$key;
        }else{
            $not_palindrome++;
            $not_palindromeArray[]=$key;
        }
    }
    print_r($numbers).PHP_EOL;
    echo "Total Palindrome numbers: $is_palindrome\n";
    echo "Array of Palindrome numbers:\n";
    print_r($is_palindromeArray).PHP_EOL;
    echo "Total Not Palindrome numbers: $not_palindrome\n";
    echo "Array of Not Palindrome numbers:\n";
    print_r($is_palindromeArray).PHP_EOL;