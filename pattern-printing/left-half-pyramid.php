<?php
echo "left half pyramid pattern\n\n";
    $n = readline("Enter the no of line : ");

    $a=$n;
    for ($r=1 ; $r <= $n ; $r++){
        for ($s=1 ; $s <= $a ; $s++){
            echo "  ";
        }
        $a--;
        for($c=1 ; $c <= $r ; $c++){
            echo "* ";
        }
        echo "\n";
    }
