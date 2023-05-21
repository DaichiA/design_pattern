<?php

require_once __DIR__ . '/DisplayImpl.php';

class Display
{
    private DisplayImpl $impl;

    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }

    public function openB() {
        $this->impl->rawOpen();
    }

    public function printB() {
        $this->impl->rawPrint();
    }

    public function closeB() {
        $this->impl->rawClose();
    }

    public function display() : void {
        $this->openB();
        $this->printB();
        $this->closeB();
    }
}