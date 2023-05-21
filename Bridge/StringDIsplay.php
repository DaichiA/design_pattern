<?php

// 実装のクラス階層

require_once __DIR__ . '/DisplayImpl.php';

class StringDisplayImple extends DisplayImpl
{
    private string $stringB;
    private int $widthB;

    public function __construct(string $stringB)
    {
        $this->stringB = $stringB;
        $this->widthB  = mb_strlen($stringB);
    }

    public function rawOpen(): void {
        $this->printLine();
    }

    public function rawPrint(): void {
        echo '|' . $this->stringB . '|' . "\n";
    }

    public function rawClose(): void {
        $this->printLine();
    }

    private function printLine() {
        echo '+';
        for ($i = 0; $i < $this->widthB; $i++) {
            echo '-';
        }
        echo '+' . "\n";
    }
}