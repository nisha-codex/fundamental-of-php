<?php
    echo "------------odd or even ? -------------------------\n\n";
    $num = readline("Enter number : ");

    if($num%2 == 0){
        echo "The Number ".$num." is Even.\n";
    }else{
         echo "The Number ".$num." is Odd.\n";
    }