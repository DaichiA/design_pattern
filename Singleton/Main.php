<?php

namespace DesignPattern\Singleton;

use DesignPattern\Singleton\Singleton;

require_once __DIR__ . '/Singleton.php';

class Main
{
    public static function main(): void
    {
        echo 'Start.' . '<br>';
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();
        if ($obj1 === $obj2) {
            echo 'obj1とobj2は同じインスタンスです。' . '<br>';
        } else {
            echo 'obj1とobj2は同じインスタンスではありません。' . '<br>';
        }
        echo 'End.' . '<br>';
    }
}

Main::main();