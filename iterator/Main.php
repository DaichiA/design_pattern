<?php

// イテレーターパターンの利点は、BookShelfクラスとBookShelfIteratorクラスの間に依存関係がないこと。
// お互いに協調して動作することができる。

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/BookShelf.php';
require_once __DIR__ . '/BookShelfAggregate.php';

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

        echo '<br>';

        echo 'for文を使う方法' . '<br>';
        for ($it = $bookShelf->iterator(); $it->hasNext();) {
            $book = $it->next();
            echo $book->getName() . '<br>';
        }
    }
}

Main::main([]);

class Aggregate
{
    public static function aggregate(array $args): void {
        $bookShelf = new BookShelfAggregate();
        $bookShelf->appendBook(new Book("Eigo"));
        $bookShelf->appendBook(new Book("Futsu"));
        $bookShelf->appendBook(new Book("Gogo"));
        $bookShelf->appendBook(new Book("Hana"));
        
        echo 'foreachで回す' . '<br>';
        
        foreach ($bookShelf as $book) {
            
            echo $book->getName() . '<br>';
        }
    }
}

echo '<br>';
Aggregate::aggregate([]);