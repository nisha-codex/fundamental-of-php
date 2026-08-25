<?php
echo "----- INCREMENT AND DECREMENT OPERATOR  ----";

//--------------------------Post increment operator---------------------------------------------
echo "\nPost increment operator\n\n";
$num1 =6;

//post increment (num1++) -->
//1st the cureent value get used(print) and then get increase by 1

echo "current value is: ".$num1.PHP_EOL; // num1 get prints

// num1++ ...on printing this....current value will use hence  print(6) then the value get increase by 1
echo $num1++.PHP_EOL;

//the num1=6 get used and then the value is increased (7)...
//so on using and printing the value of num1 the increased value is used
echo $num1.PHP_EOL;
//-----------------------------Pre increment operator---------------------------------------------
echo "\nPre increment operator\n\n";
$num2 = 3;
//pre increment (++num) -->
//1st the value get increase by 1 and then the increased value is uded (print)
echo "current value is : ".$num2.PHP_EOL; // num1 get prints

//the pre increment operator increase the value by 1..which will print here
echo ++$num2.PHP_EOL;

//the valuse has increased...so the increased value get print here
echo $num2.PHP_EOL;

//--------------------------------pre decrement operator (--num)----------------------------------------------------
echo "\npre decrement operator (--num) \n\n"; 

$num3=8;

echo "current value is : ".$num3.PHP_EOL; //value of num2 8 prints

//the value get decrease by 1 ...and the value get uded later 
echo --$num3.PHP_EOL;//decrease value is 7 so 7 get print

//the decrease value is then used ... so the value 7 get prints here
echo $num3.PHP_EOL;

//----------------------------------post decrement operator (num++)-----------------------------------
echo "\npost decrement operator(num--) \n\n"; 
$num4= 9;

echo "current value is : ".$num4.PHP_EOL; //value of num2 8 prints

//the value get used first and later the value get decrease by 1 ...
echo $num4--.PHP_EOL;//current value is 8 so 8 get print

//then the current value get decreased by 1....which get prints here
echo $num4.PHP_EOL;


