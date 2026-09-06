<?php
    echo "+ for Addition\n- for Subtraction\n* for multiplication\n/ for division\n% for finding remainder(modulo operator)\n\n";

    $num1=readline("enter 1st number: ");
    $num2 = readline("enter 2nd number: ");
    $operator=readline("which mathematical operation you want to perform : ");

    switch($operator){
        case "+": echo "Addition of these two number = ".($num1+$num2);
        break;

        case "-": echo "Subtraction of these two number = ".($num1-$num2);
        break;

        case "*": echo "Multiplication of these two number = "($num1*$num2);
        break;

        case "/": echo "division of these two number = ".($num1/$num2);
        break;

        case "%": echo "remainder = ".($num1%$num2);
        break;

        default: echo "please enter right mathematical operation as mentioned above! ";
    }