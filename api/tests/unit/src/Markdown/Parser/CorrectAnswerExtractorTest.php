<?php

namespace App\Tests\unit\src\Markdown\Parser;

use App\Markdown\Parser\DocumentExtractor;
use PHPUnit\Framework\TestCase;

class CorrectAnswerExtractorTest extends TestCase
{
    private string $document = '';

    public function setUp(): void
    {
        $filePath = '/var/www/html/tests/unit/src/Markdown/TestFixtures/question.html';
        $this->document = file_get_contents($filePath);
        parent::setUp();
    }

    public function testAnswerElement()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $questionNodes = $parser->getCorrectAnswerNodes();

        self::assertSame('p', $questionNodes[4]->nodeName);
    }

    public function testAnswerValue()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $questionNodes = $parser->getCorrectAnswerNodes();

        self::assertSame('Answer: 5', trim($questionNodes[4]->nodeValue));
    }
}
