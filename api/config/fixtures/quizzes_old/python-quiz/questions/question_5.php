<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'How many expressions can a Python Lambda function have?',
        'quiz' => 'quiz-slug-python-quiz',
        'answers' => [
            [
                'content' => '3',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => '2',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => '1',
                'is_correct' => true,
                'display_order' => 3
            ],
            [
                'content' => 'any',
                'is_correct' => false,
                'display_order' => 4
            ],
        ]
    ]
];


return $question;
