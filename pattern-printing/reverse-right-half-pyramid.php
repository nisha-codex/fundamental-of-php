<?php
echo "reverse right half pyramid pattern\n\n";
    $n = readline("Enter the no of line : ");

    $a=$n;
    for ($r=1 ; $r <= $n ; $r++){
        for ($c=1 ; $c <= $a ; $c++){
            echo "* ";
        }
        $a--;
        echo "\n";
    }

    