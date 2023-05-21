<?php

// Bridgeパターンの特徴は「機能のクラス階層」と「実装のクラス階層」を分けている点。
// 分けているおかげでそれぞれの階層を独立に拡張できる。
// この例の場合、Displayクラスを起点に、機能追加の場合はDisplayを継承したクラスを作成し、
// 実装の追加の場合は、Displayクラスのプロパティとして保持しているDisplayImpleクラスを実装（抽象クラスなので正しくは継承だろうが、今回の目的はAPI規定することなので実装と表現）することで実現する。このプロパティが2つのクラス階層の「橋」となる。

require_once __DIR__ . '/Display.php';
require_once __DIR__ . '/StringDisplay.php';
require_once __DIR__ . '/CountDisplay.php';

class Main
{
    public static function main() {
        $d1 = new Display(new StringDisplayImple('Hello, Japan.'));
        $d2 = new CountDisplay(new StringDisplayImple('Hello, World.'));
        $d3 = new CountDisplay(new StringDisplayImple('Hello, Universe'));
        $d1->display();
        $d2->display();
        $d3->display();
        $d3->multiDisplay(5);
    }
}

Main::main();