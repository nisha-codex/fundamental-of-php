<?php
echo "hollow rectangle pattern\n\n";
    $row = readline("Enter the no of line : ");
    $col= readline("Enter the no of column : ");

    $a=0;
    for ($r=1 ; $r <= $row ; $r++){
        for ($c=1 ; $c <= $col ; $c++){
            if($r==1 || $c==1 || $r==$row || $c==$col){
                echo " * ";
            }else{
                echo("   ");
            }
        }
        echo "\n";
    }