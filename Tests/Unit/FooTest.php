<?php

namespace OxidProfessionalServices\Dummy\Tests\Unit\Foo;

use OxidProfessionalServices\Dummy\Core\Foo;
use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    public function testBar()
    {
        $sut = new Foo();
        $this->assertEquals('Bar', $sut->bar());
    }
}
