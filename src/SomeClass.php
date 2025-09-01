<?php namespace SomeVendor\Traiter;

use SomeVendor\Traiter\Traits\TraitB;

class SomeClass extends AbstractClass
{
    use TraitB;

    public function echoFromSomeClass()
    {
        echo "Inside SomeClass\n";
        $this->echoFromAbstractClass();
        $this->echoFromTraitB();
    }
}
