<?php

namespace App\Tests\unit\config\fixtures\quizzes\python_quiz\questions;

use PHPUnit\Framework\TestCase;

class PythonQuestionsTest extends TestCase
{
    public function testQuestionOne()
    {
        $question = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/python-quiz/questions/question_1.php';

        self::assertIsArray($question);
    }

    public function testQuestionTwo()
    {
        $question = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/python-quiz/questions/question_2.php';

        self::assertIsArray($question);
    }

    public function testQuestionThree()
    {
        $question = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/python-quiz/questions/question_3.php';

        self::assertIsArray($question);
    }

    public function testQuestionFour()
    {
        $question = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/python-quiz/questions/question_4.php';

        self::assertIsArray($question);
    }

    public function testQuestionFive()
    {
        $question = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/python-quiz/questions/question_5.php';

        self::assertIsArray($question);
    }
}