<?php
    $num = [8, 3, 4, 1, 7, 8, 3, 0, 5];
    $arr = [];
    for ($i = 0; $i < count($num); $i++) {
        if ($arr[$num[$i]] == 1) {
            echo $num[$i] . PHP_EOL;
        }
        $arr[$num[$i]] = 1;
    }

    $num = [8, 3, 4, 1, 7, 8, 3, 0, 5];
    $arr = [];

    for ($i = 0; $i < count($num); $i++) {
        if (array_key_exists($num[$i], $arr)) {
            echo $num[$i] . PHP_EOL;
        }

        $arr[$num[$i]] = 1;
    }