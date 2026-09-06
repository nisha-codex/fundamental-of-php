<?php

// for($i = 0; $i <= 10; $i++){
//     echo $i.PHP_EOL;
// }

// for($i=1; $i<=10; $i++):
//     echo "5"." X "."$i = ".(5*$i).PHP_EOL;
// endfor;

$i = 1;

// while($i <= 10):
//     echo "Sonu and Sonika";

//     if($i == 6){
//         break;
//     }

//     $i++;
// endwhile;

// do{
//     echo "Let's eat in hell's kitchen";
//     $i++;
// }while($i <10);

// $items = ["PSP5", "XBOX", "BUGGATI", "SHINCHAN'S HOME"];

// foreach($items as $i){
//     echo $i.PHP_EOL;
// };


$status = [
    200 => "Ok",
    300 => "Redirect",
    400 => "Client Side Error",
    500 => "Server Side Error"
];

foreach($status as $key => $value){
    echo "$key ---- $value".PHP_EOL;
}