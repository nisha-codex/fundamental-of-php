<?php
    // If they are 18 or older, echo "Access Granted." 
    //If they are under 18, calculate how many years are left until they turn 18 and echo "Access Denied.Please return in X years".

    $age = readline("Enter age : ");
    
    if ($age >=18) {
        echo "Access Granted!";
    }else{
        $left_years = 18 - $age; 
        echo "Access Denied! Please return in ".$left_years." yeras".PHP_EOL;
    }