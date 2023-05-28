<?php

// Mementoパターンではある時点でのインスタンスの状態を記録・保存し、後でその状態に戻してやることができる。
// この例ではGamerクラスのインスタンスを保存するために、Gamerと同じく$moneyと$fruitプロパティを持つMementoクラスが存在する。
// Mainクラス（Caretaker役）がいつスナップショット（Mementoインスタンス）を作成するか、そしていつそれを利用してGamer（Originator役）を復元するか決め、
// Gamer（Originator役）がMementoインスタンスを作るのと、Mementoインスタンスから自分の状態を復元することの実作業を行う。

// Mementoクラスの操作を制限するために本の例ではJavaのアクセス制御の機能を利用しているが、PHPでは同じことができないので、その点は考慮から外している。
// 本来ならばMainクラス（Caretaker役）からはMementoクラスの内容を勝手に変えられないように制御しておく必要がある。

namespace DesignPattern\Memento;

require_once __DIR__ . '/Gamer.php';

class Main
{
    public static function main()
    {
        $gamer   = new Gamer(100);  // 最初の所持金は100
        $memento = $gamer->createMemento(); // 最初の状態を保存しておく

        // ゲームスタート
        for ($i = 0; $i < 100; $i++) {
            echo '=== ' . $i . "\n"; // 回数表示
            echo '現状:' . $gamer . "\n"; // 現在の主人公の状態表示

            // ゲームを進める
            $gamer->bet();

            echo '所持金は' . $gamer->getMoney() . "円になりました。\n";

            // Mementoの取り扱いの決定
            if ($gamer->getMoney() > $memento->getMoney()) {
                echo "だいぶ増えたので、現在の状態を保存しておこう。\n";
                $memento = $gamer->createMemento();
            } else if ($gamer->getMoney() < $memento->getMoney() / 2) {
                echo "だいぶ減ったので、以前の状態を復元しよう。\n";
                $gamer->restoreMemento($memento);
            } else {
                echo "変わらず\n";
            }

            sleep(1);
        }
    }
}

Main::main();