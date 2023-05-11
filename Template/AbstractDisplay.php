<?php

namespace DesignPattern\Template;

abstract class AbstractDisplay
{
    abstract public function open(): void;
    abstract public function print(): void;
    abstract public function close(): void;
    final public function display(): void
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->print();
        }
        $this->close();
    }
}