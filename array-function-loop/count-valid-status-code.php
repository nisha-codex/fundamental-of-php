<?php
    //count the number of status code in each staus code name
    //there is a dictionary have list of status code numbers...using loop match wether that status code lies in the dictionary...
    //if yes...then increase the status code name by 1....

    $stausCode_list = [
        100 => "Continue",
        101 => "Switching Protocols",
        200 => "OK",
        201 => "Created",
        202 => "Accepted",
        204 => "No Content",
        301 => "Moved Permanently",
        302 => "Found",
        304 => "Not Modified",
        400 => "Bad Request",
        401 => "Unauthorized",
        403 => "Forbidden",
        404 => "Not Found",
        405 => "Method Not Allowed",
        408 => "Request Timeout",
        409 => "Conflict",
        429 => "Too Many Requests",
        500 => "Internal Server Error",
        501 => "Not Implemented",
        502 => "Bad Gateway",
        503 => "Service Unavailable",
        504 => "Gateway Timeout"
    ];

    $statusCode_input = [100,102,106,107,400,404,300,306,502,204,308,509,500,303,203,305,407,501];

    $informational = 0;
    $success = 0;
    $redirection = 0;
    $clientError = 0;
    $serverError = 0;
    $another = 0;

    foreach($statusCode_input as $key){
        if(array_key_exists($key,$stausCode_list)){
            if($key>=100 && $key<200){
                $informational++;
            }else if($key>=200 && $key<300){
                $success++;
            }else if($key>=300 && $key<400){
                $redirection++;
            }else if($key>=400 && $key<500){
                $clientError++;
            }else if($key>=500 && $key<600){
                $serverError++;
            }else{
                $another++;
            }
        }
    }

    echo "Informational status code = ".$informational.PHP_EOL;
    echo "Success status code = ".$success.PHP_EOL;
    echo "Redirectional status code = ".$redirection.PHP_EOL;
    echo "Client Error status code = ".$clientError.PHP_EOL;
    echo "Server Error status code = ".$serverError.PHP_EOL;
    echo "Another status code = ".$another.PHP_EOL;
    