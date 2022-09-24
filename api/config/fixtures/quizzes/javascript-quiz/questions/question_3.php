<?php

/**
 * @var array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $question
 */
$question = [
    [
        'content' => 'What does ‘this’ refer to in a JavaScript object method?',
        'quiz'=> 'quiz-slug-javascript-quiz',
        'answers' => [
            [
                'content' => 'The object',
                'is_correct' => true,
                'display_order' => 1
            ],
            [
                'content' => 'Private properties',
                'is_correct' => false,
                'display_order' => 2
            ],
            [
                'content' => 'Inherited properties',
                'is_correct' => false,
                'display_order' => 3
            ]
        ]
    ]
];


return $question;
