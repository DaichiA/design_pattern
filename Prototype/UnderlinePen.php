<?php

namespace DesignPattern\Prototype;

require_once __DIR__ . '/Product.php';

class UnderlinePen implements Product
{
    private string $ulchar;

    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    public function use(string $s): void
    {
        $length = mb_strlen($s);
        echo '"' . $s . '"' . "\n";
        echo ' ';
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulchar;
        }
        echo "\n";
    }

    public function createCopy(): Product
    {
        return clone $this;
    }
}