<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What is the <aside> tag for?',
        'quiz' => 'quiz-slug-html-quiz',
        'answers' => [
            [
                'content' => 'Primary content',
                'is_correct' => false,
                'display_order' => 1
            ],
            [
                'content' => 'Empty content',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'Indirectly related content',
                'is_correct' => true,
                'display_order' => 3
            ],
        ]
    ]
];


return $question;
