<?php
echo "Square fill pattern\n\n";
    $n = readline("Enter the no of line : ");

    for ($r=1 ; $r <= $n ; $r++){
        for ($c=1 ; $c <= $n ; $c++){
            echo "* ";
        }
        echo "\n";
    }