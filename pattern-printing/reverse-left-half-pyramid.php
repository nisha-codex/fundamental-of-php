<?php
echo "reverse left half pyramid pattern\n\n";
    $n = readline("Enter the no of line : ");

    $a=0;
    $nst = $n;
    for ($r=1 ; $r <= $n ; $r++){
        for ($s=1 ; $s <= $a ; $s++){
            echo "  ";
        }
        $a++;
        for($c=1 ; $c <= $nst ; $c++){
            echo "* ";
        }
        $nst--;
        echo "\n";
    }
