<?php

namespace DesignPattern\Template;

require_once __DIR__ .  '/AbstractDisplay.php';

class CharDisplay extends AbstractDisplay
{
    private string $ch;

    public function __construct(string $ch)
    {
        $this->ch = $ch;
    }

    public function open(): void
    {
        echo "[[ ";
    }

    public function print(): void
    {
        echo $this->ch;
    }

    public function close(): void
    {
        echo " ]]<br>";
    }
}