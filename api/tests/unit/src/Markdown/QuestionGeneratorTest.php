<?php

namespace App\Tests\unit\src\Markdown;

use App\Markdown\FetcherInterface;
use App\Markdown\QuestionFetcher;
use App\Markdown\QuizFetcher;
use App\Markdown\QuestionGenerator;
use PHPUnit\Framework\TestCase;

class QuestionGeneratorTest extends TestCase
{
    private QuestionFetcher $fetcherMock;
    private const SOURCE = '/config/fixtures/quizzes/1_CSS_Quiz';

    public function setUp(): void
    {
        $fetcherMock = $this->createMock(QuestionFetcher::class);
        $fetcherMock->expects(self::once())
            ->method('fetch')
            ->with(self::SOURCE)
            ->willReturn([
                '1_1_padding_properties.md',
                '1_2_style_override.md',
                '1_3_text_font.md'
            ]);
        $this->fetcherMock = $fetcherMock;

        parent::setUp();
    }

    public function testGeneratedQuestionID()
    {
        $quizGenerator = new QuestionGenerator($this->fetcherMock);
        $dataSets = $quizGenerator->generate(self::SOURCE);

        $question2 = $dataSets[1];

        self::assertSame(2, $question2->getId());
    }

    public function testGeneratedQuizID()
    {
        $quizGenerator = new QuestionGenerator($this->fetcherMock);
        $dataSets = $quizGenerator->generate(self::SOURCE);

        $question2 = $dataSets[1];

        self::assertSame(1, $question2->getQuizId());
        self::assertSame('Style override', $question2->getTitle());
    }


    public function testGeneratedTitle()
    {
        $quizGenerator = new QuestionGenerator($this->fetcherMock);
        $dataSets = $quizGenerator->generate(self::SOURCE);

        $question2 = $dataSets[1];

        self::assertSame('Style override', $question2->getTitle());
    }
}
