<?php
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question ) {
        if ($answers[$index] === $question['correct']){
            $score++;
        }
    }
    return $score;
}

$questions = [
    ['question' => 'What Is 2 + 2 ?', 'correct' => '4'],
    ['question' => 'What Is The Capital Of France ?', 'correct' => 'Parish'],
    ['question' => 'Who Wrote "Hamlet" ?', 'correct' => 'Shakespeare'],
];

$answers = [];
foreach ($questions as $index => $question){
    echo ($index + 1) . "." . $question['question'] . "\n";
    $answers[] = trim(readline("Your Answer: "));
}

$score = evaluateQuiz($questions, $answers);
echo "\nYour Scored $score Out Of " . count($questions) . "\n";

if ($score === count($questions)){
    echo "Excellent Job!\n";
}elseif ($score > 1){
    echo "Good Effort!\n";
}else {
    echo "Better Luck Next Time!\n";
}