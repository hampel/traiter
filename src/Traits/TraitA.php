<?php namespace SomeVendor\Traiter\Traits;

trait TraitA
{
    public function echoFromTraitA()
    {
        echo "[Inside " . TraitA::class . "] called from [" . get_class($this) . "]\n";
    }
}
