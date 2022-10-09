<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'How many HTML heading levels are there?',
        'quiz' => 'quiz-slug-html-quiz',
        'answers' => [
            [
                'content' => '4',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => '6',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => '3',
                'is_correct' => false,
                'display_order' => 3
            ],
            [
                'content' => 'Unlimited',
                'is_correct' => false,
                'display_order' => 4
            ],
        ]
    ]
];


return $question;
