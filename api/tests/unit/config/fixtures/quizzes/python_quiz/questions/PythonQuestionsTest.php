<?php

namespace App\Tests\unit\config\fixtures\quizzes\python_quiz\questions;

use PHPUnit\Framework\TestCase;

class PythonQuestionsTest extends TestCase
{
    public function testQuestionOne()
    {
        $questionOne = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/python-quiz/questions/question_1.php';

        self::assertIsArray($questionOne);
    }

}