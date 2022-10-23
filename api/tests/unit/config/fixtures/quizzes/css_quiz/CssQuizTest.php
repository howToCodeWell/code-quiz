<?php

namespace App\Tests\unit\config\fixtures\quizzes\javascript_quiz;

use PHPUnit\Framework\TestCase;

class CssQuizTest extends TestCase
{
    public function testDefault()
    {
        $quiz = require dirname(__DIR__) . '/../../../../../config/fixtures/quizzes_old/css-quiz/quiz.php';

        self::assertIsArray($quiz);
    }
}
