<?php

namespace App\Tests\unit\src\Markdown\Extractor;

use App\Markdown\Extractor\DOMExtractor;
use PHPUnit\Framework\TestCase;

class PossibleAnswerExtractorTest extends TestCase
{
    private string $document = '';

    public function setUp(): void
    {
        $filePath = '/var/www/html/tests/unit/src/Markdown/TestFixtures/question.html';
        $this->document = file_get_contents($filePath);
        parent::setUp();
    }

    public function testHeadingValue()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('Possible answers', $nodes[0]->nodeValue);
    }

    public function testHeadingElement()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('h2', $nodes[0]->nodeName);
    }

    public function testFirstPossibleAnswerValue()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('[ ] 3', $nodes[2]->nodeValue);
    }

    public function testFirstPossibleAnswerElement()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('li', $nodes[2]->nodeName);
    }


    public function testLastPossibleAnswerValue()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $nodes = $parser->getPossibleAnswerNodes();
        $lastIndex = count($nodes) - 1;

        self::assertSame('[ ] 5', $nodes[$lastIndex]->nodeValue);
    }

    public function testLastPossibleAnswerElement()
    {
        $parser = new DOMExtractor();
        $parser->extract($this->document);
        $nodes = $parser->getPossibleAnswerNodes();
        $lastIndex = count($nodes) - 1;

        self::assertSame('li', $nodes[$lastIndex]->nodeName);
    }
}
