<?php

namespace App\Tests\unit\src\Markdown;

use App\Markdown\FetcherInterface;
use App\Markdown\QuestionGenerator;
use PHPUnit\Framework\TestCase;

class QuestionQuizIDGeneratorTest extends TestCase
{
    public function testGetQuestionID()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $generator = new QuestionGenerator($fetcherMock);
        $ID = $generator->getIDFromFilePath('1_2_style_override.md');
        self::assertSame(1, $ID);
    }

    public function testGetQuestionIDWithDoubleDigits()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $generator = new QuestionGenerator($fetcherMock);
        $ID = $generator->getIDFromFilePath('10_20_style_override.md');
        self::assertSame(10, $ID);
    }

    public function testGetQuestionIDWithNoIDValue()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $generator = new QuestionGenerator($fetcherMock);
        $ID = $generator->getIDFromFilePath('foo.md');
        self::assertFalse($ID);
    }

    public function testGetQuestionIDWithIncorrectValueType()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $generator = new QuestionGenerator($fetcherMock);
        $ID = $generator->getIDFromFilePath('one_2.md');
        self::assertFalse($ID);
    }
}
