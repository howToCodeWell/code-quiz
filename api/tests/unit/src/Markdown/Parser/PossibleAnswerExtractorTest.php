<?php

namespace App\Tests\unit\src\Markdown\Parser;

use App\Markdown\Parser\DocumentExtractor;
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
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('Possible answers', $nodes[0]->nodeValue);
    }

    public function testHeadingElement()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('h2', $nodes[0]->nodeName);
    }

    public function testFirstPossibleAnswerValue()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('[ ] 3', $nodes[2]->nodeValue);
    }

    public function testFirstPossibleAnswerElement()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $nodes = $parser->getPossibleAnswerNodes();

        self::assertSame('li', $nodes[2]->nodeName);
    }


    public function testLastPossibleAnswerValue()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $nodes = $parser->getPossibleAnswerNodes();
        $lastIndex = count($nodes) - 1;

        self::assertSame('[ ] 5', $nodes[$lastIndex]->nodeValue);
    }

    public function testLastPossibleAnswerElement()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $nodes = $parser->getPossibleAnswerNodes();
        $lastIndex = count($nodes) - 1;

        self::assertSame('li', $nodes[$lastIndex]->nodeName);
    }
}
