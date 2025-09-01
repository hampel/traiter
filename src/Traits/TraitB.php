<?php namespace SomeVendor\Traiter\Traits;

trait TraitB
{
    public function echoFromTraitB()
    {
        echo "[Inside " . TraitB::class . "] called from [" . get_class($this) . "]\n";
    }
}
