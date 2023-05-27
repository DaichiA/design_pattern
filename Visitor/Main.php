<?php

// Visitorパターンはデータ構造と処理を分離する。この例ではデータ構造はCompositeパターンだが、必ずしもそうである必要はない。

// この例ではFileクラスとDirectoryクラスが「データ構造」を担当している。これらのクラスはEntry抽象クラスで宣言されている通り
// getName()とgetSize()メソッドを実装するのと同時に、Element抽象クラスで宣言されているaccept()を実装する必要がある。
// このaccept()がVisitorクラスの引数をとり、visit()メソッドを実行する。このvisit()メソッドの内容が具体的な処理であり、
// この例ではListVisitor具象クラスが「処理」を担当し、処理内容を具体的に規定している。

namespace DesignPattern\Visitor;

require_once __DIR__ . '/Directory.php';
require_once __DIR__ . '/File.php';
require_once __DIR__ . '/ListVisitor.php';

class Main
{
    public static function main() {
        echo "Makeing root entries...\n";
        
        $rootdir = new Directory('root');
        $bindir  = new Directory('bin');
        $tmpdir  = new Directory('tmp');
        $usrdir  = new Directory('usr');

        $rootdir->add($bindir);
        $rootdir->add($tmpdir);
        $rootdir->add($usrdir);
        
        $bindir->add(new File('vi', 10000));
        $bindir->add(new File('latex', 20000));

        $rootdir->accept(new ListVisitor());

        echo "Making user entries...\n";

        $yuki   = new Directory('yuki');
        $hanako = new Directory('hanako');
        $tomura = new Directory('tomura');

        $usrdir->add($yuki);
        $usrdir->add($hanako);
        $usrdir->add($tomura);

        $yuki->add(new File('diary.html', 100));
        $yuki->add(new File('Composite.java', 200));

        $hanako->add(new File('memo.txt', 300));

        $tomura->add(new File('game.doc', 400));
        $tomura->add(new File('junk.mail', 500));

        $rootdir->accept(new ListVisitor());
    } 
}

Main::main();