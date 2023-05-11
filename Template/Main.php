<?php

// Templateパターンはスーパークラスで処理の枠組みを定め、サブクラスでその具体的内容を定めるパターン
// ここではmain()内でのみ変数を使っているが、プロパティに持つときはその型はAbstractDisplayクラスに定義する

namespace DesignPattern\Template;

require_once __DIR__ .  '/CharDisplay.php';
require_once __DIR__ .  '/StringDisplay.php';

class Main
{
    public static function main(): void
    {
        $d1 = new CharDisplay('H');
        $d2 = new StringDisplay('Hello, world.');

        $d1->display();
        echo '<br><br>';
        $d2->display();
    }
}

Main::main();