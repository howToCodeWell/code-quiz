<?php
namespace App\Tests\unit\fixtures\quizzes\html_quiz;

use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase
{
    public function testDefault()
    {
        $quiz = require dirname(__DIR__)  .'/../../../../config/fixtures/quizzes/html-quiz/quiz.php';

        self::assertIsArray($quiz);
    }

}