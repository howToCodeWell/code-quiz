<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What is __init__ in Python?',
        'quiz' => 'quiz-slug-python-quiz',
        'answers' => [
            [
                'content' => 'Install method',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'Constructor method',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => 'Proxy method',
                'is_correct' => false,
                'display_order' => 3
            ],
            [
                'content' => 'Destructor method',
                'is_correct' => false,
                'display_order' => 4
            ],
        ]
    ]
];


return $question;
