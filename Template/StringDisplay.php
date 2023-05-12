<?php

namespace DesignPattern\Template;

require_once __DIR__ .  '/AbstractDisplay.php';

class StringDisplay extends AbstractDisplay
{
    private string $string;
    private int $width;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function open(): void
    {
        $this->printLine();
    }

    public function print(): void
    {
        echo "|{$this->string}|<br>";
    }

    public function close(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo "+";
        for ($i = 0; $i < $this->width; $i++) {
            echo "-";
        }
        echo "+<br>";
    }
}