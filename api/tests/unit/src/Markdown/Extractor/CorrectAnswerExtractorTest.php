<?php

namespace App\Tests\unit\src\Markdown\Extractor;

use App\Markdown\Extractor\DOMExtractor;
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
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $questionNodes = $parser->getCorrectAnswerNodes();

        self::assertSame('p', $questionNodes[4]->nodeName);
    }

    public function testAnswerValue()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $questionNodes = $parser->getCorrectAnswerNodes();

        self::assertSame('Answer: 5', trim($questionNodes[4]->nodeValue));
    }
}
