<?php
echo "right half number pyramid pattern\n\n";
    $n = readline("Enter the no of line : ");

    for ($r=1 ; $r <= $n ; $r++){
        for ($c=1 ; $c <= $r ; $c++){
            echo $r." ";
        }
        echo "\n";
    }