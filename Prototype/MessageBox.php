<?php

namespace DesignPattern\Prototype;

require_once __DIR__ . '/Product.php';

class MessageBox implements Product
{
    private string $decochar;

    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    public function use(string $s): void
    {
        $length = mb_strlen($s);
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo "\n";
        echo $this->decochar . ' ' . $s . ' ' . $this->decochar;
        echo "\n";
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo "\n";
    }

    public function createCopy(): Product
    {
        return clone $this;
    }
}