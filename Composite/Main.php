<?php

// Comopsiteパターンは容器と中身を同一視（= 複数と単数を同一視）し、再起的な構造を作るパターン。
// Entryに定義されているprintList()では中でabstractメソッドのprintListPrefix()を呼んでいるが、
// これによって同じ呼び出しのインターフェースから、FileとMyDirectoryそれぞれで実装しているconcreteメソッドを呼び分けることができる。
// → どちらのオブジェクトでもprintList()を実行でき、その内部ではそれぞれのオブジェクト独自のメソッドが実行される。

require_once __DIR__ . '/File.php';
require_once __DIR__ . '/MyDirectory.php';

class Main
{
    public static function main() {
        echo "Making root entries...\n";
        $rootdir = new MyDirectory('root');
        $bindir  = new MyDirectory('bin');
        $tmpdir  = new MyDirectory('tmp');
        $usrdir  = new MyDirectory('usr');

        $rootdir->add($bindir);
        $rootdir->add($tmpdir);
        $rootdir->add($usrdir);

        $bindir->add(new File('vi', 10000));
        $bindir->add(new File('latex', 20000));

        $rootdir->printList();

        echo "Making user entries...\n";
        $yuki   = new MyDirectory('yuki');
        $hanako = new MyDirectory('hanako');
        $tomura = new MyDirectory('tomura');
        $usrdir->add($yuki);
        $usrdir->add($hanako);
        $usrdir->add($tomura);
        $yuki->add(new File('diary.html', 100));
        $yuki->add(new File('Composite.php', 200));
        $hanako->add(new File('memo.txt', 300));
        $tomura->add(new File('game.doc', 400));
        $tomura->add(new File('junk.mail', 500));
        $rootdir->printList();
    }
}

Main::main();