<?php

namespace App\Tests\unit\src\Markdown;

use App\Entity\Answer;
use App\Entity\Question;
use App\Markdown\QuizFetcher;
use App\Markdown\QuizGenerator;
use PHPUnit\Framework\TestCase;

class QuizFetcherTest extends TestCase
{
    public function testFetchQuizzes()
    {
        /**
         * Return an array of directories
         *
         * config/fixtures/quizzes/*
         *  - 1_CSS_Quiz
         *  - 2_HTML_Quiz
         *  - 3_JavaScript_Quiz
         *
         * $quizzes = ['1_CSS_Quiz','2_HTML_Quiz' '3_JavaScript_Quiz']
         */

        $source = '/config/fixtures/quizzes';

        $fetcher = new QuizFetcher();
        $data = $fetcher->fetch($source);

        $expected = '/config/fixtures/quizzes/1_CSS_Quiz';

        self::assertContains($expected, $data);
    }
}
