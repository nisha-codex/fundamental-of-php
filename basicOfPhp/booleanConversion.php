<?php

    //Boolean conversion in PHP means converting another data type into either:
    //true or false

    // integer to Boolean
    // if 0 or 0.0 -> false
    // if other value -> true
    // same with the float values
    $a=0;
    $bool_a=(bool) $a;
    $b=10;
    $bool_b=(bool) $b;
    $c=19.5;
    $bool_c=(bool) $c;

    echo "\nboolean of a is $bool_a".PHP_EOL;
    var_dump($bool_a);
    //    when the output is false it prints nothings ...print just a blank splace

    echo "\nboolean of b is $bool_b".PHP_EOL;
    var_dump($bool_b);
    echo "\nboolean of c is $bool_c".PHP_EOL;
    var_dump($bool_c);


//string to boolean
//Non-empty string → true
//Empty string "" → false Because the string contains nothing.

    $x="ruhi";
    $bool_x=(bool) $x;
    $y="";
    $bool_y=(bool) $y;

    echo "\nboolean of x is $bool_x".PHP_EOL;
    var_dump($bool_x);
    echo "\nboolean of y is $bool_y".PHP_EOL;
    var_dump($bool_y);

// string containing 0 or 0.0
//Even though "0" is a non-empty string, PHP treats the string "0" as false when converted to Boolean.
    echo "\nboolean of string containg value 0 (str=0): ";
    $str="0";
    var_dump((bool)$str);


// null value
// null get converted to false in boolean

    $val = null;
    $bool_Val=(bool) $val;
    echo "\nvariable having null value in boolean -> $bool_Val ".PHP_EOL;
    //prints nothing because the result is false
    var_dump((bool)$bool_Val);
