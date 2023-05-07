<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/BookShelf.php';

class Main {
    public static function main(array $args): void
    {
        $bookShelf = new BookShelf();
        $bookShelf->appendBook(new Book("Around the World in 80 Days"));
        $bookShelf->appendBook(new Book("Bible"));
        $bookShelf->appendBook(new Book("Cinderella"));
        $bookShelf->appendBook(new Book("Daddy-Long-Legs"));

        // 明示的にIteratorを使う方法
        echo '明示的にIteratorを使う方法' . '<br>';
        $it = $bookShelf->iterator();
        while ($it->hasNext()) {
            $book = $it->next();
            echo $book->getName() . '<br>';
        }
    }
}

Main::main([]);