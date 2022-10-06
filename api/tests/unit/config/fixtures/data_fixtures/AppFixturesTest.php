<?php

declare(strict_types=1);

namespace App\Tests\unit\config\fixtures\data_fixtures;

use App\DataFixtures\AppFixtures;
use App\Entity\Question;
use App\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class AppFixturesTest extends KernelTestCase
{

    /** @var \Doctrine\ORM\EntityManager */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
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
        $appFixtures = new AppFixtures;

        $result = $appFixtures->getDataSets();

        self::assertIsArray($result);
    }

    public function testGetFilePathsMethod()
    {
        $appFixtures = new AppFixtures;

        $result = $appFixtures->getFilePaths();

        self::assertIsArray($result);
    }

    public function testCreateQuiz()
    {
        $appFixtures = new AppFixtures;

        $data = [
            'title' => 'Test Quiz Title',
            'slug' => 'test-quiz-title'
        ];

        $result = $appFixtures->createQuiz($this->entityManager, $data);

        self::assertInstanceOf("App\Entity\Quiz", $result);
        self::assertEquals("Test Quiz Title", $result->getTitle());
        self::assertEquals("test-quiz-title", $result->getSlug());
    }

    public function testCreateQuestion()
    {
        $appFixtures = new AppFixtures;
        $quiz = new Quiz;
        $quiz = $this->invokeProperty($quiz, 'id', 10);

        $data = [
            'content' => 'Test quiz content',
        ];

        $result = $appFixtures->createQuestion($this->entityManager, $data, $quiz);

        self::assertInstanceOf("App\Entity\Question", $result);
        self::assertInstanceOf("App\Entity\Quiz", $result->getQuiz());
        self::assertEquals(10, $result->getQuiz()->getId());
        self::assertEquals("Test quiz content", $result->getContent());
    }

    public function testCreateAnswer()
    {
        $appFixtures = new AppFixtures;
        $question = new Question;
        $question = $this->invokeProperty($question, 'id', 10);

        $data = [
            'content' => 'Test answer content',
            'display_order' => 3,
            'is_correct' => false
        ];

        $result = $appFixtures->CreateAnswer($this->entityManager, $data, $question);

        self::assertInstanceOf("App\Entity\Answer", $result);
        self::assertEquals(10, $result->getQuestion()->getId());
        self::assertEquals("Test answer content", $result->getContent());
        self::assertEquals(3, $result->getDisplayOrder());
        self::assertEquals(false, $result->getIsCorrect());
    }
}