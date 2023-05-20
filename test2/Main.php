<?php

namespace Test;

require_once __DIR__ . '/B/Factory.php';
use Test\B\Factory;

class Main
{
    public static function main(array $array) {
        if (count($array) !== 2) {
            echo "引数の配列の要素数は2つで<br>";
            exit();
        }

        $file_name  = $array[0];
        $class_name = $array[1];

        $factory = Factory::getFactory($class_name);

        echo 'Main.php最後行' . "\n";
    }
}

Main::main(['ルートから発信', 'Link']);