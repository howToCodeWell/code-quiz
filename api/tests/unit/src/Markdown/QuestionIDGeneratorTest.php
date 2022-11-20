<?php

namespace App\Tests\unit\src\Markdown;

use App\Markdown\FetcherInterface;
use App\Markdown\Parser\MarkdownParser;
use App\Markdown\QuestionGenerator;
use PHPUnit\Framework\TestCase;

class QuestionIDGeneratorTest extends TestCase
{
    public function testGetQuestionID()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $parserMock = $this->createMock(MarkdownParser::class);
        $generator = new QuestionGenerator($fetcherMock, $parserMock);
        $questionID = $generator->getIDFromFilePath('1_2_style_override.md', false);
        self::assertSame(2, $questionID);
    }

    public function testGetQuestionIDWithDoubleDigits()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $parserMock = $this->createMock(MarkdownParser::class);
        $generator = new QuestionGenerator($fetcherMock, $parserMock);
        $questionID = $generator->getIDFromFilePath('1_20_style_override.md', false);
        self::assertSame(20, $questionID);
    }

    public function testGetQuestionIDWithNoIDValue()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $parserMock = $this->createMock(MarkdownParser::class);
        $generator = new QuestionGenerator($fetcherMock, $parserMock);
        $questionID = $generator->getIDFromFilePath('1.md', false);
        self::assertFalse($questionID);
    }

    public function testGetQuestionIDWithIncorrectValueType()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $parserMock = $this->createMock(MarkdownParser::class);
        $generator = new QuestionGenerator($fetcherMock, $parserMock);
        $questionID = $generator->getIDFromFilePath('1_two.md', false);
        $questionID = $generator->getIDFromFilePath('1_two.md', false);
        self::assertFalse($questionID);
    }
}
