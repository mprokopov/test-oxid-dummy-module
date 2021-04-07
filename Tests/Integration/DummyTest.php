<?php

namespace OxidProfessionalServices\Dummy\Tests\Unit\DummyUser;

use OxidProfessionalServices\Dummy\Model\DummyUser;
use PHPUnit\Framework\TestCase;

final class DummyUserTest extends TestCase
{
    public function testFoo()
    {
        $sut = new DummyUser();
        $this->assertEquals('Bar', $sut->foo());
    }
}
