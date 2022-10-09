<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'Which HTML elements contain JavaScript?',
        'quiz' => 'quiz-slug-javascript-quiz',
        'answers' => [
            [
                'content' => '<JavaScript>',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => '<script>',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => '<js>',
                'is_correct' => false,
                'display_order' => 3
            ]
        ]
    ]
];


return $question;
