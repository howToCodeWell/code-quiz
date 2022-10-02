<?php

declare(strict_types=1);

namespace App\Tests\unit\config\fixtures\data_fixtures;

use App\DataFixtures\AppFixtures;
use PHPUnit\Framework\TestCase;

final class AppFixturesTest extends TestCase
{
    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public function testGetFilePathsMethod()
    {
        $class = new AppFixtures;
        
        $result = $this->invokeMethod($class, 'getFilePaths');

        $this->assertIsArray($result);
    }
}
