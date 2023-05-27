<?php

namespace DesignPattern\Visitor;

require_once __DIR__ . '/Entry.php';

use IteratorAggregate;
use Traversable;

class Directory extends Entry implements IteratorAggregate
{
    private string $name;
    private array $directory = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        $size = 0;
        foreach ($this->directory as $entry) {
            $size += $entry->getSize();
        }
        return $size;
    }

    public function add(Entry $entry) {
        $this->directory[] = $entry;
        return $this;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitDirectory($this);
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->directory);
    }
}