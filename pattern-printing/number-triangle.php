<?php
echo "number tiangle...having all number same in a row\n\n";
    $n = readline("Enter the no of line : ");

    $space = $n-1;
    for ($r=1 ; $r <= $n ; $r++){
        for($s=1;$s<=$space;$s++){
            echo " ";
        }
        $space--;
        for ($c=1 ; $c <= $r ; $c++){
            echo $r." ";
        }
        echo "\n";
    }