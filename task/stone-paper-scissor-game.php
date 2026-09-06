<?php
$choice = ['stone', 'paper', 'scissor'];
$p_score = 0;
$c_score = 0;

while ($p_score < 3 && $c_score < 3) {
    $p_choice = strtolower(readline("WHAT YOU WANT TO CHOOSE (stone/paper/scissor): "));

    if (!in_array($p_choice, $choice)) {
        echo "You have choosen wrong choice :)\n\n";
        exit(0);
    }
    
    echo "you choice -->" . $p_choice . PHP_EOL;
    sleep(1);

    $idx = mt_rand(0, 2);
    $c_choice = $choice[$idx];

    echo "computer choice -->" . $c_choice . PHP_EOL;
    sleep(1);

    if ($p_choice == $c_choice) {
        echo "its a Draw !\n\n";
    } else if (
        ($p_choice == "paper" && $c_choice == "stone") ||
        ($p_choice == "stone" && $c_choice == "scissor") ||
        ($p_choice == "scissor" && $c_choice == "paper")
    ) {

        echo "YOU WIN !\n\n";
        $p_score++;
    } else {
        echo "COMPUTER WIN !\n\n";
        $c_score++;
    }
}

if ($p_score == 3) {
    echo "You Won The Game...Congratulations! \n";
} else if ($c_score == 3) {
    echo "computer Won The Game....Better luck next time! \n";
}

