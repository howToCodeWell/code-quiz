<?php
namespace App\Tests\unit\src\Entity;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    public function testDefault()
    {
        $entity = new Question();
        self::assertEmpty($entity->getId());
        self::assertNull($entity->getContent());
        self::assertEmpty($entity->getAnswers());
        self::assertNull($entity->getQuiz());
    }

    public function testSettingContent()
    {
        $value = 'This is the title';
        $entity = new Question();
        $entity->setContent($value);
        self::assertSame($value, $entity->getContent());
    }

    public function testSettingQuiz()
    {
        $quizMock = $this->createMock(Quiz::class);
        $quizMock->expects(self::once())->method('getTitle')->willReturn('quiz title');
        $entity = new Question();
        $entity->setQuiz($quizMock);
        self::assertSame('quiz title', $quizMock->getTitle());
    }

    public function testRemoveAnswer()
    {
        $question = new Question();

        $answerMock = $this->createMock(Answer::class);
        $answerMock->expects(self::once())->method('getQuestion')->willReturn($question);

        $question->addAnswer($answerMock);
        $question->removeAnswer($answerMock);

        self::assertCount(0, $question->getAnswers());
    }
}