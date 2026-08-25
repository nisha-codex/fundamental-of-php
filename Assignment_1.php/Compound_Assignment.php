<?php
    // A store starts with a total inventory of 500 items. 
    // Using compound assignment operators ( etc.), simulate the following events: • • • 
    // 150 items are sold. 
    // A new shipment of 200 items arrives. 
    // Half of the total inventory is moved to a different warehouse. 
    // Print the final inventory count. 

    $inventory = 500; //current
    $inventory -=150; //150 are sold
    $inventory += 200; //200 arrives
    $inventory /= 2; // half of total is moved

    echo "Total inventory = ".$inventory.PHP_EOL;