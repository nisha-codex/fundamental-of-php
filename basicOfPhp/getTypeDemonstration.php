<?php
    // demonstrate gettype in php
    //gettype is used to check the type of value stored in the variable
    //how to check: 
    // 1] echo gettype($variableName)
    // 2] store the gettype($variableName) in another variable and the print it 

     $a=101;
    $name="ruhi";
    $decimal_value=10.6; 
    $isGirl=true;

    echo gettype($a).PHP_EOL;
    echo gettype($name).PHP_EOL;
    echo gettype($decimal_value).PHP_EOL;
    echo gettype($isGirl).PHP_EOL;
