<?php

namespace DesignPattern\AbstractFactory\Factory;

use DesignPattern\AbstractFactory\listFactory\ListFactory;

require_once __DIR__ . '/Link.php';
require_once __DIR__ . '/Tray.php';
require_once __DIR__ . '/Page.php';
require_once __DIR__ . '/../listfactory/ListFactory.php';



abstract class Factory
{
    public static function getFactory(string $classname): Factory {
        $factory = null;
        try {
            // 直接$classnameをListFactoryという文字列に置き換えたら動いた
            $factory = new $classname();
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        return $factory;
    }

    public abstract function createLink(string $caption, string $url): Link;
    public abstract function createTray(string $caption): Tray;
    public abstract function createPage(string $title, string $author): Page;
}