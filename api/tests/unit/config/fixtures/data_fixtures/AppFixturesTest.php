<?php

declare(strict_types=1);

namespace App\Tests\unit\config\fixtures\data_fixtures;

use App\DataFixtures\AppFixtures;
use App\Entity\Question;
use App\Entity\Quiz;
use PHPUnit\Framework\TestCase;

final class AppFixturesTest extends TestCase
{

    private $appFixtures;

    protected function setUp(): void
    {
        $objectManager = $this->getMockBuilder('Doctrine\Persistence\ObjectManager')
            ->disableOriginalConstructor()
            ->onlyMethods(['flush', 'persist'])
            ->getMockForAbstractClass();

        $appFixtures = new AppFixtures;
        $appFixtures = $this->invokeProperty($appFixtures, 'objectManager', $objectManager);
        $this->appFixtures = $appFixtures;
    }

    public function invokeProperty(object &$object, string $propertyName, mixed $parameter)
    {
        $reflection = new \ReflectionClass(get_class($object));
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);
        $property->setValue($object, $parameter);

        return $object;
    }

    public function testGetDataSets()
    {
        $result = $this->appFixtures->getDataSets();

        self::assertIsArray($result);
    }

    public function testGetFilePathsMethod()
    {
        $result = $this->appFixtures->getFilePaths();

        self::assertIsArray($result);
    }

    public function testCreateQuiz()
    {
        $data = [
            'title' => 'Test Quiz Title',
            'slug' => 'test-quiz-title'
        ];

        $result = $this->appFixtures->createQuiz($data);

        self::assertInstanceOf("App\Entity\Quiz", $result);
        self::assertEquals("Test Quiz Title", $result->getTitle());
        self::assertEquals("test-quiz-title", $result->getSlug());
    }

    public function testCreateQuestion()
    {
        $quiz = new Quiz;
        $quiz = $this->invokeProperty($quiz, 'id', 10);

        $data = [
            'content' => 'Test quiz content',
        ];

        $result = $this->appFixtures->createQuestion($data, $quiz);

        self::assertInstanceOf("App\Entity\Question", $result);
        self::assertInstanceOf("App\Entity\Quiz", $result->getQuiz());
        self::assertEquals(10, $result->getQuiz()->getId());
        self::assertEquals("Test quiz content", $result->getContent());
    }

    public function testCreateAnswer()
    {
        $question = new Question;
        $question = $this->invokeProperty($question, 'id', 10);

        $data = [
            'content' => 'Test answer content',
            'display_order' => 3,
            'is_correct' => false
        ];

        $result = $this->appFixtures->CreateAnswer($data, $question);

        self::assertInstanceOf("App\Entity\Answer", $result);
        self::assertEquals(10, $result->getQuestion()->getId());
        self::assertEquals("Test answer content", $result->getContent());
        self::assertEquals(3, $result->getDisplayOrder());
        self::assertEquals(false, $result->getIsCorrect());
    }
}