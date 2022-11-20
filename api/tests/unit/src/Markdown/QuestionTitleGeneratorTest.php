<?php

namespace App\Tests\unit\src\Markdown;

use App\Markdown\FetcherInterface;
use App\Markdown\Parser\MarkdownParser;
use App\Markdown\QuestionGenerator;
use PHPUnit\Framework\TestCase;

class QuestionTitleGeneratorTest extends TestCase
{
    public function testGetQuestionTitle()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $parserMock = $this->createMock(MarkdownParser::class);
        $generator = new QuestionGenerator($fetcherMock, $parserMock);
        $title = $generator->getTitleFromFilePath('1_2_style_override.md');
        self::assertSame('Style override', $title);
    }

    public function testGetQuestionTitleWithNoTitleValue()
    {
        $fetcherMock = $this->createMock(FetcherInterface::class);
        $parserMock = $this->createMock(MarkdownParser::class);
        $generator = new QuestionGenerator($fetcherMock, $parserMock);
        $title = $generator->getTitleFromFilePath('1.md');
        self::assertFalse($title);
    }
}
