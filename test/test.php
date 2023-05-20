<?php

// todo ↓ 名前空間使ったらうまく動作しなくなった
namespace Orange;

abstract class Test
{
    public static function test(string $className) {
        echo "Testクラスのtestメソッドです。\n";
        $apple = new $className();
        $apple->bake();
    }
}

class Apple
{
    public function __construct()
    {
        echo "りんごをもらいました。\n";
    }

    public function bake() {
        echo "りんごを焼きました。\n";
    }
}

// class Main
// {
//     public static function main(array $array) {
//         $class_name = $array[0];
//         $factory = Test::getFactory($class_name);
//         echo 'new成功';
//     }
// }

// Main::main(['Apple']);
Test::test('Orange\Apple');