<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What does PEP stand for in Python? Python ____ _____',
        'quiz' => 'quiz-slug-python-quiz',
        'answers' => [
            [
                'content' => 'Empty path',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'Emergency process',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => 'Enhancement process',
                'is_correct' => false,
                'display_order' => 3
            ],
            [
                'content' => 'Enhancement proposal',
                'is_correct' => true,
                'display_order' => 4
            ],
        ]
    ]
];


return $question;
