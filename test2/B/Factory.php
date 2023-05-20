<?php

namespace Test\B;

// require_once __DIR__ . '/../A/Link.php';
// use Test\A\Link;

abstract class Factory
{
    public static function getFactory(string $classname): Factory {
        $factory = null;
        try {
            $factory = new $classname();
            echo 'きちんとLinkをnewできた';
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        return $factory;
    }

    public abstract function createLink(string $caption, string $url): Link;
    public abstract function createTray(string $caption): Tray;
    public abstract function createPage(string $title, string $author): Page;
}

class Link
{
    public function __construct()
    {
        echo 'Linkクラス生成' . "<br>";
    }
}

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