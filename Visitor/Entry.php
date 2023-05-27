<?php

namespace DesignPattern\Visitor;

require_once __DIR__ . '/Element.php';

abstract class Entry implements Element
{
    public abstract function getName(): string;
    public abstract function getSize(): int;

    public function __toString()
    {
        return $this->getName() . ' (' . $this->getSize() . ')';
    }
}