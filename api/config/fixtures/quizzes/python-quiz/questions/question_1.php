<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'Are Python Tuples mutable?',
        'quiz' => 'quiz-slug-python-quiz',
        'answers' => [
            [
                'content' => 'Yes',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'No',
                'is_correct' => true,
                'display_order' => 2
            ],
        ]
    ]
];


return $question;
