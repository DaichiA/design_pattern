<?php

// Decoratorパターンは飾り枠と中身を同一視することで、既存クラスのインターフェースを変更することなく機能追加することができる。

require_once __DIR__ . '/StringDisplay.php';
require_once __DIR__ . '/SideBorder.php';
require_once __DIR__ . '/FullBorder.php';

class Main
{
    public static function main() {
        $b1 = new StringDisplay('Hello World.');
        $b2 = new SideBorder($b1, '#');
        $b3 = new FullBorder($b2);
        $b1->show();
        echo "\n";
        $b2->show();
        echo "\n";
        $b3->show();
        echo "\n";

        $b4 = new SideBorder(
            new FullBorder(
                new FullBorder(
                    new SideBorder(
                        new FullBorder(
                            new StringDisplay('Hello World.')
                        ), '*'
                    )
                )
            ), '/'
        );
        $b4->show();
    }
}

Main::main();