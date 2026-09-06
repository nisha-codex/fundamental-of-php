<?php
echo "number triangle pattern\n\n";
    $n = readline("Enter the no of line : ");
    $num;
    for ($r=1 ; $r <= $n ; $r++){
        if($r%2==0){
            $num=0;
        }else{
             $num=1;
        }
        for($c=1 ; $c <= $r ; $c++){
           echo $num." ";
           if($num==0){
            $num=1;
           }else{
            $num=0;
           }
        }
        echo "\n";
    }