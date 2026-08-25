<?php
    // Create a PHP script that declares variables for a student's name, age, course, and enrollment status (boolean). 
    // Use these variables to print a formatted "Student Profile" using both single and double quotes to demonstrate the difference in variable parsing. 


    // parsing and interpolation in PHP:::
    //  parsing means PHP reads and understands the code
    //  while interpolation means PHP replaces a variable with its actual value inside a string. 
    // For example, when PHP sees $name = "Ruhi";, it parses the code and understands that $name is a variable containing "Ruhi".
    //  When we write echo "My name is $name";, PHP uses interpolation and replaces $name with "Ruhi", so the output becomes My name is Ruhi.
    //  In simple words, parsing is understanding the code, whereas interpolation is putting the variable's value into a string.


    $name ="Ruhi Anjum";
    $age = 20;
    $course = "BSc in CA";
    $isEnrolled = true;

    echo "\n***************  Student Profile  ********************\n\n";
    
    //In PHP, single quotes (' ') and double quotes (" ") behave differently when variables are used inside a string.

    echo "Printing the details using double Quotes\n\n";

    //Double quotes follow variable interpolation, which means PHP looks at the variable and replaces it with its actual value.
    //  For example, if $name = "Ruhi";, then echo "My name is $name"; gives the output My name is Ruhi.

    //double quotes allow variables to be used directly inside a string
    echo "Name : $name".PHP_EOL;
    echo "Age : $age".PHP_EOL;
    echo "Course : $course".PHP_EOL;
    echo "Enrollment : $isEnrolled".PHP_EOL;

    echo "\nPrinting the details using double Quotes with dot (concatenation operator)\n\n";

    echo "Name : ".$name.PHP_EOL;
    echo "Age : ".$age.PHP_EOL;
    echo "Course : ".$course.PHP_EOL;
    echo "Enrollment : ".$isEnrolled.PHP_EOL;

    echo "\n\nPrinting the details using single Quotes\n\n";

    //single quotes do not follow variable interpolation, 
    // so echo 'My name is $name'; gives My name is $name 
    // because PHP treats $name as normal text.
    
    echo 'Name : $name'.PHP_EOL;
    echo 'Age : $age'.PHP_EOL;
    echo 'Course : $course'.PHP_EOL;
    echo 'Enrollment : $isEnrolled'.PHP_EOL;

    echo "\nPrinting the details using single Quotes with dot (concatenation operator) \n\n";

    echo 'Name : '.$name.PHP_EOL;
    echo 'Age : '.$age.PHP_EOL;
    echo 'Course : '.$course.PHP_EOL;
    echo 'Enrollment : '.$isEnrolled.PHP_EOL;