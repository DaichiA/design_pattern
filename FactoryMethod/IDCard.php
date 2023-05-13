<?php

namespace DesignPatterns\FactoryMethod;

require_once __DIR__ . '/Product.php';

class IDCard extends Product
{
    private string $owner;

    public function __construct(string $owner)
    {
        echo $owner . "のカードを作ります。<br>";
        $this->owner = $owner;
    }

    public function use(): void
    {
        echo $this->owner . "のカードを使います。<br>";
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}