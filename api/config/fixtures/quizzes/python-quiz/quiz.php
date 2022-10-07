<?php

$question1 = require_once 'questions/question_1.php';
$question2 = require_once 'questions/question_2.php';
$question3 = require_once 'questions/question_3.php';
$question4 = require_once 'questions/question_4.php';
$question5 = require_once 'questions/question_5.php';

/**
 * @var array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}} $quiz
 */
$quiz = [
    'title' => 'Python Quiz',
    'slug' => 'python-quiz',
    'questions' => [
        $question1[0],
        $question2[0],
        $question3[0],
        $question4[0],
        $question5[0],
    ]
];

return $quiz;
