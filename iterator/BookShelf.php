<?php

require_once __DIR__ . '/BookShelfIterator.php';
require_once __DIR__ . '/SelfIterable.php';

class BookShelf implements SelfIterable
{
    private array $books;
    private int $last = 0;

    // public function __construct(int $maxsize)
    // {
    //     for ($i = 0; $i < $maxsize; $i++) {
    //         $this->books[$i] = new Book();
    //     }
    // }

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book): void
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength(): int
    {
        return $this->last;
    }

    public function iterator(): BookShelfIterator
    {
        return new BookShelfIterator($this);
    }
}
