<?php

namespace App\Tests\unit\src\Markdown;

use App\Markdown\QuestionFetcher;
use PHPUnit\Framework\TestCase;

class QuestionFetcherTest extends TestCase
{
    public function testFetchQuestion()
    {
        $fetcher = new QuestionFetcher();
        $data = $fetcher->fetch('/config/fixtures/quizzes/1_CSS_Quiz');

        $expected = '1_1_padding_properties.md';

        self::assertContains($expected, $data);
    }
}
