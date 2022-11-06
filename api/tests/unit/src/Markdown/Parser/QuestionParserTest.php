<?php

namespace App\Tests\unit\src\Markdown\Parser;

use App\Markdown\Parser\QuestionParser;
use PHPUnit\Framework\TestCase;

class QuestionParserTest extends TestCase
{
    private string $document = '<h1>This is the question</h1>
<p>An example</p>
<pre><code class="language-php">&lt;?php echo "hello world";
// Hello</code></pre>
<p>Another example</p>
<pre><code class="language-php">&lt;?php echo "hello world";</code></pre>
<h2>Possible answers</h2>
<ul>
<li>[ ] 3</li>
<li>[ ] 4</li>
<li>[ ] 5</li>
</ul>
<details id="answer">
    <summary>
        <b>Answer</b>
    </summary>
    <p>
      Answer: <strong>5</strong>
    </p>
</details>';

    public function testQuestionHeadingValue()
    {
        $parser = new QuestionParser($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();

        self::assertSame('This is the question', $questionNodes[0]->nodeValue);
    }

    public function testQuestionHeadingElement()
    {
        $parser = new QuestionParser($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();

        self::assertSame('h1', $questionNodes[0]->nodeName);
    }

    public function testLastQuestionElement()
    {
        $parser = new QuestionParser($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();
        $count = count($questionNodes) -1;

        self::assertSame('code', $questionNodes[$count]->nodeName);
    }

    public function testLastQuestionValue()
    {
        $parser = new QuestionParser($this->document);
        $parser->extract();
        $questionNodes = $parser->getQuestionNodes();
        $count = count($questionNodes) -1;

        self::assertSame('<?php echo "hello world";', $questionNodes[$count]->nodeValue);
    }
}
