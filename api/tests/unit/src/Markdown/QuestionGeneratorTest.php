<?php

namespace App\Tests\unit\src\Markdown;

use App\Markdown\QuizFetcher;
use App\Markdown\QuestionGenerator;
use PHPUnit\Framework\TestCase;

class QuestionGeneratorTest extends TestCase
{

    public function testGenerator()
    {
        $this->markTestSkipped('Not in current scop but needs fixing before merge');
        /**
         * Return an array of file data
         *  $dataSets = [
         *      [
         *          'file_path' =>
         *          'code' => '1_1',
         *          'title' => 'Padding properties',
         *          'quiz_id' =>  1,
         *          'contents_raw' => '<p>Raw HTML for question 1</p>
         *      ],
         *      [
         *          'code' => 1_3,
         *          'title' => 'Style override',
         *          'quiz_id' =>  1,
         *          'contents_raw' => '<p>Raw HTML for question 2</p>
         *      ],
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
        $quizGenerator = new QuestionGenerator($fetcherMock);
        $dataSets = $quizGenerator->generate($source);

        $cssQuiz = $dataSets[0];

        self::assertArrayHasKey('id', $cssQuiz);
        self::assertArrayHasKey('name', $cssQuiz);
        self::assertArrayHasKey('file_path', $cssQuiz);

        self::assertSame(1, $cssQuiz->getId());
        self::assertSame('CSS Quiz', $cssQuiz->getName());
        self::assertSame('/config/fixtures/quizzes/1_CSS_Quiz', $cssQuiz->getFilePath());

    }

}
