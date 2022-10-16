<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'How many padding properties are there in CSS?',
        'quiz' => 'quiz-slug-css-quiz',
        'answers' => [
            [
                'content' => '3',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => '4',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => '5',
                'is_correct' => true,
                'display_order' => 3
            ],
        ]
    ]
];


return $question;
