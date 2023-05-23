<?php

require_once __DIR__ . '/Entry.php';
class MyDirectory extends Entry
{
    private string $name;
    private array $directory = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSize(): int {
        $size = 0;
        foreach ($this->directory as $entry) {
            $size += $entry->getSize();
        }
        return $size;
    }

    public function printListPrefix(string $prefix): void {
        echo $prefix . '/' . $this . "\n";
        foreach ($this->directory as $entry) {
            $entry->printListPrefix($prefix . '/' . $this->getName());
        }
    }

    public function add(Entry $entry) {
        $this->directory[] = $entry;
        return $this;
    }
}