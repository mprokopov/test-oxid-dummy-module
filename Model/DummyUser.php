<?php

namespace OxidProfessionalServices\Dummy\Model;

use OxidProfessionalServices\Dummy\Core\Foo;

class DummyUser extends DummyUser_parent
{
    public function foo()
    {
        $foo = new Foo();
        return $foo->bar();
    }
}
