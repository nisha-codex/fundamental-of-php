<?php
    //Assume two variables: $stored_username = "admin" and $stored_password ="secret123" . 
    // Create two input variables $input_user and $input_pass . 
    // Use a nested if statement or logical operators to check 
    // if both the username and password match. If they do, echo "Login Successful". 
    // If only the username is wrong, echo "User not found". 
    // If the username is correct but the password is wrong, echo "Incorrect password". 

    $stored_username = "Ruhi";
    $stored_password ="Ruhi123";

    $input_user = readline("Enter your User-Name : ");
    $input_pass = readline("Enter your Password: ");

    if( $input_user == "Ruhi" && $input_pass == "Ruhi123"){
        echo "Login Successfully !";
    }else if ( $input_user != "Ruhi"){
        echo "User not found!";
    }else if ($input_user == "Ruhi" && $input_pass != "Ruhi123"){
        echo "Incorrect password!";
    }