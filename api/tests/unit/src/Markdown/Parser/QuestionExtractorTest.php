<?php

namespace App\Tests\unit\src\Markdown\Parser;

use App\Markdown\Parser\DocumentExtractor;
use PHPUnit\Framework\TestCase;

class QuestionExtractorTest extends TestCase
{
    private string $document = '';

    public function setUp(): void
    {
        $filePath = '/var/www/html/tests/unit/src/Markdown/TestFixtures/question.html';
        $this->document = file_get_contents($filePath);

        parent::setUp();
    }

    public function testQuestionHeadingValue()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();

        self::assertSame('This is the question', $questionNodes[0]->nodeValue);
    }

    public function testQuestionHeadingElement()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();

        self::assertSame('h1', $questionNodes[0]->nodeName);
    }

    public function testLastQuestionElement()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();
        $count = count($questionNodes) -1;

        self::assertSame('code', $questionNodes[$count]->nodeName);
    }

    public function testLastQuestionValue()
    {
        $parser = new DocumentExtractor($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();
        $count = count($questionNodes) -1;

        self::assertSame('<?php echo "hello world";', $questionNodes[$count]->nodeValue);
    }
}
