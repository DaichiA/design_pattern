<?php

namespace DesignPattern\Singleton;

class Singleton
{
    private static Singleton $singleton;

    private function __construct()
    {
        echo 'インスタンスを生成しました。' . '<br>';
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}