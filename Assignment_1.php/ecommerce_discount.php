<?php
//cart discount system. Given a variable += , $amount : • • • 
//If the amount is greater than or equal to $500, apply a 20% discount. 
//If the amount is between $200 and $499, apply a 10% discount. 
//If the amount is strictly less than $200, apply no discount. 
//Calculate and print the final payable amount. 

echo "\n---------------  The E-commerce Discount ------------------\n\n";
$amount =readline("Enter Total Amount: ");
$discount = 0;

if ($amount >= 500){
    echo "\n you got 20% discount\n\n";
    $discount = $amount*(20/100);
}else if( $amount >= 200 and $amount <= 499){
    echo "\nyou got 10% discount\n\n";
    $discount = $amount*(10/100);
}else if( $amount >200){
    echo "\nsorry! no discount\n\n";
}

$total_amount = $amount - $discount;

echo "total bill = "."$ ".$amount.PHP_EOL;
echo "After Discount your bill is:"."$ ".$total_amount.PHP_EOL;