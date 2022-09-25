<?php

namespace App\Tests\unit\fixtures\quizzes\html_quiz\questions;

use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    public function testQuestionOne()
    {
        $questionOne = require dirname(__DIR__) . '/../../../../../config/fixtures/quizzes/html-quiz/questions/question_1.php';

        self::assertIsArray($questionOne);
    }

    public function testQuestionTwo()
    {
        $questionTwo = require dirname(__DIR__) . '/../../../../../config/fixtures/quizzes/html-quiz/questions/question_2.php';

        self::assertIsArray($questionTwo);
    }
}