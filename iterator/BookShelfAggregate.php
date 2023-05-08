<?php

require_once __DIR__ . '/BookShelfIterator.php';
require_once __DIR__ . '/SelfIterable.php';

class BookShelfAggregate implements IteratorAggregate
{
    private array $books;

    public function appendBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->books);
    }
}
