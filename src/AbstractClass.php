<?php namespace SomeVendor\Traiter;

use SomeVendor\Traiter\Traits\TraitA;

abstract class AbstractClass
{
    use TraitA;

    protected function echoFromAbstractClass()
    {
        echo "Inside AbstractClass\n";
        $this->echoFromTraitA();
    }
}
