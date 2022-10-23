<?php

$question1 = require 'questions/question_1.php';
$question2 = require 'questions/question_2.php';
$question3 = require 'questions/question_3.php';
$question4 = require 'questions/question_4.php';
$question5 = require 'questions/question_5.php';

/**
 * @var array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}} $quiz
 */
$quiz = [
    'title' => 'CSS Quiz',
    'slug' => 'css-quiz',
    'questions' => [
        $question1[0],
        $question2[0],
        $question3[0],
        $question4[0],
        $question5[0],
    ]
];

return $quiz;
