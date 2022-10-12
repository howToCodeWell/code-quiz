<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'In CSS which property controls the text font?',
        'quiz' => 'quiz-slug-css-quiz',
        'answers' => [
            [
                'content' => 'font-face',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'font',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'font-family',
                'is_correct' => true,
                'display_order' => 3
            ],
            [
                'content' => 'font-style',
                'is_correct' => false,
                'display_order' => 4
            ],
        ]
    ]
];


return $question;
