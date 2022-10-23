<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What controls a repeating background in CSS?',
        'quiz' => 'quiz-slug-css-quiz',
        'answers' => [
            [
                'content' => 'background: repeat',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'image-repeat: repeat',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'repeat-background: repeat',
                'is_correct' => false,
                'display_order' => 3
            ],
            [
                'content' => 'background-repeat: repeat',
                'is_correct' => true,
                'display_order' => 4
            ],
        ]
    ]
];


return $question;
