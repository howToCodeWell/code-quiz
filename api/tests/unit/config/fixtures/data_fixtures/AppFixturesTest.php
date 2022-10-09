<?php

declare(strict_types=1);

namespace App\Tests\unit\config\fixtures\data_fixtures;

use App\DataFixtures\AppFixtures;
use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use Doctrine\Persistence\ObjectManager;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class AppFixturesTest extends TestCase
{
    /** @var AppFixtures */
    private $appFixtures;

    /** @var MockObject|ObjectManager */
    private $objectManager;

    protected function setUp(): void
    {
        $objectManager = $this->getMockBuilder(ObjectManager::class)
            ->onlyMethods(['flush', 'persist'])
            ->getMockForAbstractClass();
        $this->objectManager = $objectManager;
        
        $appFixtures = new AppFixtures;
        $appFixtures = $this->invokeProperty($appFixtures, 'objectManager', $objectManager);
        $this->appFixtures = $appFixtures;
    }

    /**
     * @param object $object
     * @param string $propertyName
     * @param mixed $parameter
     */
    public function invokeProperty(object &$object, string $propertyName, mixed $parameter): object
    {
        $reflection = new ReflectionClass(get_class($object));
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);
        $property->setValue($object, $parameter);

        return $object;
    }

    public function testLoad()
    {
        $loadFunction = $this->appFixtures->load($this->objectManager);

        self::assertNull($loadFunction);
    }

    public function testCreateQuizzes()
    {
        $createdQuizzes = $this->appFixtures->createQuizzes();

        self::assertIsArray($createdQuizzes);

        foreach ($createdQuizzes as $quiz) {
            self::assertInstanceOf(Quiz::class, $quiz);
        }
    }

    public function testCreateQuestions()
    {
        $html = require dirname(__DIR__) . '/../../../../config/fixtures/quizzes/html-quiz/quiz.php';

        $quiz = new Quiz;
        $quiz->setTitle('Test title');
        $quiz->setSlug('test-slug');

        $createQuestionsFunction = $this->appFixtures->createQuestions($html['questions'], $quiz);

        self::assertNull($createQuestionsFunction);
    }

    public function testCreateAnswers()
    {
        $question1 = require dirname(__DIR__) . '/../../../../config/fixtures/quizzes/html-quiz/questions/question_1.php';
        $question = new Question;
        $question->setContent('Test content');

        $createAnswersFunction = $this->appFixtures->createAnswers($question1[0]['answers'], $question);

        self::assertNull($createAnswersFunction);
    }

    public function testGetDataSets()
    {
        $result = $this->appFixtures->getDataSets();

        self::assertIsArray($result);
    }

    public function testGetFilePathsMethod()
    {
        $filePaths = $this->appFixtures->getFilePaths();

        self::assertIsArray($filePaths);

        foreach ($filePaths as $filePath) {
            self::assertFileExists($filePath);
        }
    }

    public function testCreateQuiz()
    {
        $data = [
            'title' => 'Test Quiz Title',
            'slug' => 'test-quiz-title'
        ];

        $result = $this->appFixtures->createQuiz($data);

        self::assertInstanceOf(Quiz::class, $result);
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

        self::assertInstanceOf(Question::class, $result);
        self::assertInstanceOf(Quiz::class, $result->getQuiz());
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

        self::assertInstanceOf(Answer::class, $result);
        self::assertEquals(10, $result->getQuestion()->getId());
        self::assertEquals("Test answer content", $result->getContent());
        self::assertEquals(3, $result->getDisplayOrder());
        self::assertEquals(false, $result->getIsCorrect());
    }
}