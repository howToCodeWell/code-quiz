<?php

declare(strict_types=1);

namespace App\Tests\unit\config\fixtures\data_fixtures;

use App\DataFixtures\AppFixtures;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class AppFixturesTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public function testGetDataSets()
    {
        $class = new AppFixtures;
        
        $result = $this->invokeMethod($class, 'getDataSets');

        self::assertIsArray($result);
    }

    public function testGetFilePathsMethod()
    {
        $class = new AppFixtures;
        
        $result = $this->invokeMethod($class, 'getFilePaths');

        self::assertIsArray($result);
    }

    public function testCreateQuiz()
    {
        $class = new AppFixtures;

        $data = [
            'title' => 'Test Quiz Title',
            'slug' => 'test-quiz-title'
        ];

        $result = $this->invokeMethod($class, 'CreateQuiz', [$this->entityManager, $data]);

        self::assertInstanceOf("App\Entity\Quiz", $result);
        self::assertEquals("Test Quiz Title", $result->getTitle());
        self::assertEquals("test-quiz-title", $result->getSlug());
    }
}
