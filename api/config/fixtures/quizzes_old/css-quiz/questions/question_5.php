<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'In #css how would you remove an underline from a hyperlink?',
        'quiz' => 'quiz-slug-css-quiz',
        'answers' => [
            [
                'content' => 'underline: none',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'text-underline: none',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'text-decoration: none',
                'is_correct' => true,
                'display_order' => 3
            ],
        ]
    ]
];


return $question;
