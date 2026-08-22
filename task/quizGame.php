<?php

// question answer game answer
//for correct answer u will score 2 points (plus 2 for each right answer)
//for incorrect answer u will loose 1 marks (minus 1 from the total score)


echo "Welcome to Our Quiz Game Challange\n\n";

echo "rules-> you have to attempt 10 questions , you will get plus 2 marks for every correct answer and loose 1 marks for every incorrect answer ....u have to type the answer manually there is no shortcut so please enter the complete answer . THANK U !\n\n";

$playing = readline("Do u want to play this game? (Yes or No): \n");

if ((strtolower($playing)) != "yes") {
    exit;
}

echo "\nOkay lets begin this Game!\n\n";
$quesAttempt = 0;
$score = 0;
$correct = 0;
$inCorrect = 0;

//quest 1
$ques = readline("what is the Capital of India: \n");
$quesAttempt++;
if ((strtolower($ques)) == "new delhi") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 2
$ques = readline("Which state is famous for Taj Mahal: \n");
$quesAttempt++;
if ((strtolower($ques)) == "uttar pradesh") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 3
$ques = readline("Which state is the steel city of india : \n");
$quesAttempt++;
if ((strtolower($ques)) == "jamshedpur") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 4
$ques = readline("Which state is the Largest state in India by Area : \n");
$quesAttempt++;
if ((strtolower($ques)) == "rajasthan") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 5
$ques = readline("Which state is known as city of Pearls: \n");
$quesAttempt++;
if ((strtolower($ques)) == "hyderabad") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 6
$ques = readline("Which state is golden city of india : \n");
$quesAttempt++;
if ((strtolower($ques)) == "jaisalmer") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 7
$ques = readline("Which state is famous for Spice : \n");
$quesAttempt++;
if ((strtolower($ques)) == "kerala") {
   echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 8
$ques = readline("Which state is known as the Pink City Of India : \n");
$quesAttempt++;
if ((strtolower($ques)) == "jaipur") {
   echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 9
$ques = readline("Which state is known as the city of Dreams : \n");
$quesAttempt++;
if ((strtolower($ques)) == "mumbai") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

//quest 10
$ques = readline("Which state is known as the city of Nawabs : \n");
$quesAttempt++;
if ((strtolower($ques)) == "lucknow") {
    echo "Correct Answer\n\n";
    $score = $score + 2;
    $correct++;
} else {
    echo "Incorrect Answer\n\n";
    $score = $score - 1;
    $inCorrect++;
}

// result of the user perfomance
echo "\nCONGRATULATION ! you have completed this game, here is you game result-> \n\n";
echo "Total question = ". $quesAttempt.PHP_EOL;
echo "Attemp Correct = ".$correct.PHP_EOL;
echo "Attemp Incorrect = ".$inCorrect.PHP_EOL;
echo "Total Score = " . $score . PHP_EOL;
echo "score in percentage = ".(($correct/$quesAttempt)*100)."%".PHP_EOL;
echo "\n";




