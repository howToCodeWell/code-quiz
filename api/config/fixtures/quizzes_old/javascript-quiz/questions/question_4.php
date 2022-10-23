<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'Is JavaScript a case sensitive programming language?',
        'quiz' => 'quiz-slug-javascript-quiz',
        'answers' => [
            [
                'content' => 'Yes',
                'is_correct' => true,
                'display_order' => 1
            ],
            [
                'content' => 'No',
                'is_correct' => false,
                'display_order' => 2
            ]
        ]
    ]
];


return $question;
