<?php

abstract class Entry
{
    public abstract function getName(): string;
    public abstract  function  getSize(): int;
    // 一覧を表示する
    public function printList() {
        $this->printListPrefix('');
    }

    // prefixを前につけて一覧を表示する
    protected abstract function printListPrefix(string $prefix): void;

    public function __toString() {
        return $this->getName() . ' (' . $this->getSize() . ')';
    }
}