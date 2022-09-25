<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'How many kinds of loops are there in JavaScript?',
        'quiz'=> 'quiz-slug-javascript-quiz',
        'answers' => [
            [
                'content' => '3',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => '5',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => '7',
                'is_correct' => false,
                'display_order' => 3
            ],
            [
                'content' => '2',
                'is_correct' => false,
                'display_order' => 4
            ]
        ]
    ]
];


return $question;
