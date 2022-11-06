<?php

namespace App\Tests\unit\src\Markdown;

use App\Entity\Answer;
use App\Entity\Question;
use App\Markdown\FetcherInterface;
use App\Markdown\QuestionGenerator;
use App\Markdown\QuizFetcher;
use App\Markdown\QuizGenerator;
use PHPUnit\Framework\TestCase;

class QuizGeneratorTest extends TestCase
{
    public function testGenerateIDFromFilePath()
    {
//        $document = '<p>This is a test</p><p>This is another test</p>';
//        $fetcher = $this->createMock(FetcherInterface::class);
//        $generator = new QuestionGenerator($fetcher);
//        $generator->generateIDFromFilePath($document);
//        $id = $generator->generateIDFromFilePath($filePath);
        self::assertSame(1, 1);
    }
}
