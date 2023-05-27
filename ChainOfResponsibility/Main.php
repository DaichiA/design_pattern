<?php

// Chain of Responsibilityパターンは複数のオブジェクトを鎖のように繋いでおき、そのオブジェクトを渡り歩いて
// 目的のオブジェクトを決定する。
// Suportクラスのsupport()メソッドでは、引数で渡されたトラブルをresolve()抽象メソッドで解決できたら解決し、
// 解決できなければ次のオブジェクトでsupport()メソッドを実行する、と解決までの枠組み（たらい回しの方針）を定めている。
// Supportクラスを継承した各サブサポートクラスでresolve()メソッドを実装し、具体的な解決処理を書く。

namespace DesignPattern\ChainOfResponsibility;

require_once __DIR__ . '/NoSupport.php';
require_once __DIR__ . '/LimitSupport.php';
require_once __DIR__ . '/SpecialSupport.php';
require_once __DIR__ . '/OddSupport.php';
require_once __DIR__ . '/Trouble.php';

class Main
{
    public static function main()
    {
        $alice   = new NoSupport('Alice');
        $bob     = new LimitSupport('Bob', 100);
        $charlie = new SpecialSupport('Charlie', 429);
        $diana   = new LimitSupport('Diana', 200);
        $elmo    = new OddSupport('Elmo');
        $fred    = new LimitSupport('Fred', 300);

        // 連鎖の形成
        $alice->setNext($bob)->setNext($charlie)->setNext($diana)->setNext($elmo)->setNext($fred);

        // さまざまなトラブル発生
        for ($i = 0; $i < 500; $i += 33) {
            $alice->support(new Trouble($i));
        }
    }
}

Main::main();