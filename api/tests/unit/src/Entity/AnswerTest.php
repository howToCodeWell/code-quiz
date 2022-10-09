<?php
namespace App\Tests\unit\src\Entity;

use App\Entity\Answer;
use App\Entity\Question;
use PHPUnit\Framework\TestCase;

class AnswerTest extends TestCase
{
    public function testDefault()
    {
        $entity = new Answer();
        self::assertEmpty($entity->getContent());
        self::assertNull($entity->getQuestion());
        self::assertNull($entity->getId());
        self::assertNull($entity->getIsCorrect());
        self::assertNull($entity->getDisplayOrder());
    }

    public function testSettingContent()
    {
        $value = 'This is the answer';
        $entity = new Answer();
        $entity->setContent($value);
        self::assertSame($value, $entity->getContent());
    }

    public function testSettingDisplayOrder()
    {
        $value = 1;
        $entity = new Answer();
        $entity->setDisplayOrder($value);
        self::assertSame($value, $entity->getDisplayOrder());
    }

    public function testSettingIsCorrect()
    {
        $value = true;
        $entity = new Answer();
        $entity->setIsCorrect($value);
        self::assertTrue($entity->getIsCorrect());
    }

    public function testSettingQuestion()
    {
        $value = new Question();
        $value->setContent('This is the question');
        $entity = new Answer();
        $entity->setQuestion($value);
        self::assertSame('This is the question', $entity->getQuestion()->getContent());
    }
}