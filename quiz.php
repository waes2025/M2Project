<?php

$questions = [
    ['questions' => 'What is 2 + 2 ?', 'correct' => '4'],
    ['questions' => 'What is the capital city of Bangladesh??', 'correct' => 'Dhaka'],
    ['questions' => 'Who is the writer of Agni Bina?', 'correct' => 'Nazrul'],

];

$answers = [];

foreach($questions as $index => $question)
{
    echo ($index + 1 ). "." .$question['questions']. "\n";
    $answers[] = trim(readline("Your answer: "));
}

function evaluteQuiz(array $questions, array $answers):int
{
    $score = 0;
    foreach($questions as $index => $question)
    {
        if($answers[$index] === $question['correct']){
            $score++;
        }
    }

    //var_dump($score);

    return $score;
}

$myScore = evaluteQuiz($questions, $answers);

echo "\n Your scored $myScore out of ". count($questions). ".\n";

if($myScore === count($questions)){
    echo "Excelent Job! \n";
}elseif($myScore >= 1){
    echo "Good efford! \n";
}else{
    echo "Your result is fail, try again later. \n";
}