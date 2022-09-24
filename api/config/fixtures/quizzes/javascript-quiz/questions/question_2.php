<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What is a callback function  in JavaScript?',
        'quiz'=> 'quiz-slug-javascript-quiz',
        'answers' => [
            [
                'content' => 'A function passed as arg',
                'is_correct' => true,
                'display_order' => 1
            ],
            [
                'content' => 'Code that calls itself',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'Global functions',
                'is_correct' => false,
                'display_order' => 3
            ]
        ]
    ]
];


return $question;
