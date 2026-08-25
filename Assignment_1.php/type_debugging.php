<?php
    //Initialize an integer, a float, a string, and a boolean variable. 
    // Use the var_dump() function to display the data type and value of each variable.

    $num = 25;
    $cost =150.76;
    $name = "Ruhi Anjum";
    $isStudent = true;

    var_dump($num);
    var_dump($cost);
    var_dump($name);
    var_dump($isStudent);

    // var_dump() is very useful for debugging because sometimes a program does not work as expected, 
    // and we need to find out what is actually stored inside a variable. 
    // var_dump() helps us by showing both the value and the data type of the variable. 
    // For example, if we think $age contains the number 20, but it actually contains "20" as a string, 
    // var_dump($age) will clearly show the difference. This helps us find mistakes in our code quickly. 
    // In simple words, var_dump() is like checking the inside of a variable to see what value and type it really has, 
    // which makes finding and fixing errors easier.