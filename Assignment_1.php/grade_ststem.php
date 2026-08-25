<?php
    echo "\n------------------- Number Grade System ---------------------\n\n";
    // A for marks btn 90-100
    // B for marks btn 80-89
    // C for marks btn 70-79
    // D for marks btn 60-69
    // F for marks bellow 60
    $marks = readline("Enter marks: ");

    if ($marks < 0 || $marks > 100) {
        echo "Invalid Input";
    }else if ($marks >=90 && $marks <= 100) {
        echo "Grade = A";
    }else if($marks >=80 && $marks <= 89){
        echo "Grade = B";
    }else if($marks >= 70 && $marks <= 79){
        echo "Grade = C ";
    }else if($marks >= 60 && $marks <= 69 ){
        echo "Grade = D";
    }else{
        echo "Grade = F";
    }


