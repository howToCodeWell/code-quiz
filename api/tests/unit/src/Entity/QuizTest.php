<?php
namespace App\Tests\unit\src\Entity;

use App\Entity\Question;
use App\Entity\Quiz;
use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase
{
    public function testDefault()
    {
        $entity = new Quiz();
        self::assertEmpty($entity->getQuestions());
        self::assertNull($entity->getId());
        self::assertNull($entity->getSlug());
        self::assertNull($entity->getTitle());
    }

    public function testSettingTitle()
    {
        $value = 'This is the title';
        $entity = new Quiz();
        $entity->setTitle($value);
        self::assertSame($value, $entity->getTitle());
    }

    public function testSettingSlug()
    {
        $value = 'This-is-the-title';
        $entity = new Quiz();
        $entity->setSlug($value);
        self::assertSame($value, $entity->getSlug());
    }

    public function testAddQuestion()
    {
        $questionMock = $this->createMock(Question::class);

        $entity = new Quiz();
        $entity->addQuestion($questionMock);

        self::assertCount(1, $entity->getQuestions());
    }

    public function testRemoveQuestion()
    {
        $quiz = new Quiz();

        $questionMock = $this->createMock(Question::class);
        $questionMock->expects(self::once())->method('getQuiz')->willReturn($quiz);

        $quiz->addQuestion($questionMock);
        $quiz->removeQuestion($questionMock);

        self::assertCount(0, $quiz->getQuestions());
    }
}