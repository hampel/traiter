<?php namespace SomeVendor\Traiter\Traits;

trait TraitB
{
    public function echoFromTraitB()
    {
        echo "[Inside " . TraitB::class . "]\n";
    }
}
