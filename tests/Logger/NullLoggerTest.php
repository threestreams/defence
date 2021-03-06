<?php

declare(strict_types=1);

namespace ThreeStreams\Defence\Tests\Logger;

use PHPUnit\Framework\TestCase;
use Psr\Log\AbstractLogger;
use ThreeStreams\Defence\Logger\NullLogger;
use ReflectionClass;

class NullLoggerTest extends TestCase
{
    public function testIsAPsrAbstractlogger()
    {
        $this->assertTrue(is_subclass_of(NullLogger::class, AbstractLogger::class));
    }

    public function testIsConcrete()
    {
        $reflectionClass = new ReflectionClass(NullLogger::class);

        $this->assertFalse($reflectionClass->isAbstract());
    }
}
