<?php

namespace App\Tests\unit\config\fixtures\quizzes\javascript_quiz;

use PHPUnit\Framework\TestCase;

class JavaScriptQuizTest extends TestCase
{
    public function testDefault()
    {
        $quiz = require dirname(__DIR__) . '/../../../../../config/fixtures/quizzes_old/javascript-quiz/quiz.php';

        self::assertIsArray($quiz);
    }
}
