<?php

$question1 = require_once 'questions/question_1.php';

/**
 * @var array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}} $quiz
 */
$quiz = [
    'title' => 'HTML Quiz',
    'slug' => 'html-quiz',
    'questions' => [
        $question1[0]
    ]
];

return $quiz;
