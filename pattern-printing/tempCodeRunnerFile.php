<?php
echo "number triangle pattern\n\n";
    $n = readline("Enter the no of line : ");
    $space=$n-1;
    for ($r=1 ; $r <= $n ; $r++){
        for ($s=1 ; $s <= $space ; $s++){
            echo " ";
        }
        $space--;

        $num=1;
        for($c=1 ; $c <= $r ; $c++){
            echo $num." ";
            $num++;
        }
        echo "\n";
    }