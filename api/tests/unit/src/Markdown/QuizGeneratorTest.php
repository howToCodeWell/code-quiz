<?php

namespace App\Tests\unit\src\Markdown;

use App\Entity\Answer;
use App\Entity\Question;
use App\Markdown\FetcherInterface;
use App\Markdown\QuizFetcher;
use App\Markdown\QuizGenerator;
use PHPUnit\Framework\TestCase;

class QuizGeneratorTest extends TestCase
{

    public function testGenerator()
    {
        /**
         * Return an array of directories
         *  $dataSets = [
         *      [
         *          'id' => 1,
         *          'title' => 'CSS Quiz',
         *          'path' =>  'config/fixtures/quizzes/1_CSS_Quiz'
         *      ],
         *      [
         *          'id' => 2,
         *          'title' => 'HTML Quiz',
         *          'path' =>  'config/fixtures/quizzes/2_HTML_Quiz',
         *      ]
         * ]
         */

        $source = '/config/fixtures/quizzes/';
        $fetcherMock = $this->createMock(QuizFetcher::class);
        $fetcherMock->expects(self::once())
            ->method('fetch')
            ->with($source)
            ->willReturn([
            '/config/fixtures/quizzes/1_CSS_Quiz',
            '/config/fixtures/quizzes/2_HTML_Quiz'
        ]);
        $quizGenerator = new QuizGenerator($fetcherMock);
        $dataSets = $quizGenerator->generate($source);

        $cssQuiz = $dataSets[0];

        self::assertArrayHasKey('id', $cssQuiz);
        self::assertArrayHasKey('name', $cssQuiz);
        self::assertArrayHasKey('file_path', $cssQuiz);

    }

    public function testGenerateIDFromFilePath()
    {
        $filePath = '/config/fixtures/quizzes/1_CSS_Quiz';
        $fetcher = $this->createMock(FetcherInterface::class);
        $generator = new QuizGenerator($fetcher);
        $id = $generator->generateIDFromFilePath($filePath);
        self::assertSame(1, $id);
    }

    public function testGenerateNameFromFilePath()
    {
        $filePath = '/config/fixtures/quizzes/1_CSS_Quiz';
        $fetcher = $this->createMock(FetcherInterface::class);
        $generator = new QuizGenerator($fetcher);
        $name = $generator->generateNameFromFilePath($filePath);
        self::assertSame('CSS Quiz', $name);
    }
}
