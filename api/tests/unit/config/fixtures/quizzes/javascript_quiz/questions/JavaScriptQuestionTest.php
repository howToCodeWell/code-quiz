<?php

namespace App\Tests\unit\config\fixtures\quizzes\javascript_quiz\questions;

use PHPUnit\Framework\TestCase;

class JavaScriptQuestionTest extends TestCase
{
    public function testQuestionOne()
    {
        $questionOne = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/javascript-quiz/questions/question_1.php';

        self::assertIsArray($questionOne);
    }

    public function testQuestionTwo()
    {
        $questionTwo = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/javascript-quiz/questions/question_2.php';

        self::assertIsArray($questionTwo);
    }

    public function testQuestionThree()
    {
        $questionThree = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/javascript-quiz/questions/question_3.php';

        self::assertIsArray($questionThree);
    }

    public function testQuestionFour()
    {
        $questionFour = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/javascript-quiz/questions/question_4.php';

        self::assertIsArray($questionFour);
    }

    public function testQuestionFive()
    {
        $questionFive = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/javascript-quiz/questions/question_5.php';

        self::assertIsArray($questionFive);
    }

    public function testQuestionSix()
    {
        $questionSix = require dirname(__DIR__) . '/../../../../../../config/fixtures/quizzes/javascript-quiz/questions/question_6.php';

        self::assertIsArray($questionSix);
    }
}
