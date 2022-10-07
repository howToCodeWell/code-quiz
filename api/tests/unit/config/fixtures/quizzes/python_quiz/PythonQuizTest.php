<?php

namespace App\Tests\unit\config\fixtures\quizzes\javascript_quiz;

use PHPUnit\Framework\TestCase;

class PythonQuizTest extends TestCase
{
    public function testDefault()
    {
        $quiz = require dirname(__DIR__) . '/../../../../../config/fixtures/quizzes/python-quiz/quiz.php';

        self::assertIsArray($quiz);
    }

}