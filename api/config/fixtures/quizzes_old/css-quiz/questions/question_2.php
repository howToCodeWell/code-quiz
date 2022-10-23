<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'In CSS which rule overrides a previous style?',
        'quiz' => 'quiz-slug-css-quiz',
        'answers' => [
            [
                'content' => 'important',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => '!important',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => 'important!',
                'is_correct' => false,
                'display_order' => 3
            ],
        ]
    ]
];


return $question;
