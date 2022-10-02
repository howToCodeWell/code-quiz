<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What do Python generators create?',
        'quiz'=> 'quiz-slug-python-quiz',
        'answers' => [
            [
                'content' => 'Iterator objects',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'A boolean',
                'is_correct' => true,
                'display_order' => 2
            ],
            [
                'content' => 'A function',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'Nothing',
                'is_correct' => false,
                'display_order' => 3
            ],
        ]
    ]
];


return $question;
