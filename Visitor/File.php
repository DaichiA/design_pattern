<?php

namespace DesignPattern\Visitor;

class File extends Entry
{
    private string $name;
    private int $size;

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitFile($this);
    }
}