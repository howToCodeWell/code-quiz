<?php

namespace App\Tests\unit\config\fixtures\quizzes\html_quiz;

use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase
{
    public function testDefault()
    {
        $quiz = require dirname(__DIR__) . '/../../../../../config/fixtures/quizzes_old/html-quiz/quiz.php';

        self::assertIsArray($quiz);
    }
}
