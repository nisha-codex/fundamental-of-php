<?php
    echo "Enter the number from 1 to 7 and get the corroesponding days name \n";

    $daysNum =(int)readline("Enter the day number : ");

    $dayName = match($daysNum){
        1 => "MONDAY",
        2 => "TUESDAY",
        3 => "WEDNESDAY",
        4 => "THURSDAY",
        5 => "FRIDAY",
        6 => "SATURDAY",
        7 => "SUNDAY",

        default => "Enter number from 1-7 ! "
    };

    echo "Day is ".$dayName;

    