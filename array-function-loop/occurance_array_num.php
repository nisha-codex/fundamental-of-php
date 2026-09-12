<!-- <?php
    $numbers = [1,2,3,1,0,9,8,5,8,4,5,6,1,3,6,0,3,2,7,9,0,7,7,5,5];
    $array = [];

    foreach($numbers as $key){
        if(array_key_exists($key,$array)){
            $array[$key]++;
        }else{
            $array[$key]=1;
        }
    }

    print_r($array);