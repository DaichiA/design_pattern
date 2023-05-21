<?php

// 機能のクラス階層

require_once __DIR__ . '/Display.php';

class CountDisplay extends Display
{
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    public function multiDisplay(int $times) {
        $this->openB();
        for ($i=0; $i < $times; $i++) { 
            $this->printB();
        }
        $this->closeB();
    }
}