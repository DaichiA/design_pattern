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
        echo '<br>';
        echo $this->decochar . ' ' . $s . ' ' . $this->decochar;
        echo '<br>';
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo '<br>';
    }

    public function createCopy(): Product
    {
        return clone $this;
    }
}