<?php

$question1 = require 'questions/question_1.php';
$question2 = require 'questions/question_2.php';

/**
 * @var array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}} $quiz
 */
$quiz = [
    'title' => 'HTML Quiz',
    'slug' => 'html-quiz',
    'questions' => [
        $question1[0],
        $question2[0]
    ]
];

return $quiz;
