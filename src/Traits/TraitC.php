<?php namespace SomeVendor\Traiter\Traits;

trait TraitC
{
    public function echoFromTraitC()
    {
        echo "[Inside " . TraitC::class . "] called from [" . get_class($this) . "]\n";
    }
}
