<?php
    //Define a PHP constant named GRAVITY with a value of 9.8. 
    //calculates the weight of an object on Earth given its mass in a variable "The weight of a X kg object is Y Newtons." 

    //formula -->> W=m×g
    //W = Weight, measured in Newtons (N)
    //m = Mass, measured in kilograms (kg)
    //g = Acceleration due to gravity on earth (9.8m/s2)

    define("g", 9.8);
    $mass = readline("Enter Mass in Kg: ");
    $weight = $mass*g; 

    echo "The Weight of ".$mass." kg object is ".$weight." Newtons".PHP_EOL;


