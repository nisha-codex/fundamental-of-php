<?php
echo "Rhombus pattern\n\n";
    $n = readline("Enter the no of line : ");

    $a=0;
    for ($r=1 ; $r <= $n ; $r++){
        for ($s=1 ; $s <= $a ; $s++){
            echo "  ";
        }
        $a++;
        $nst = $n;
        for($c=1 ; $c <= $nst ; $c++){
            echo "* ";
        }
        echo "\n";
    }