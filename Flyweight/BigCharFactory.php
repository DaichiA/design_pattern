<?php

namespace DesignPattern\Flyweight;

require_once __DIR__ . '/BigChar.php';

class BigCharFactory
{
    private array $pool = []; // すでに作ったBigCharのインスタンスを管理
    private static BigCharFactory $singleton; // singletonパターン

    // 唯一のインスタンスを得る
    public static function getInstance(): BigCharFactory
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new BigCharFactory();
        }
        return self::$singleton;
    }

    // BigCharのインスタンスを生成（共有）
    public function getBigChar(string $charName)
    {
        $bc = null;
        if (isset($this->pool[$charName])) {
            $bc = $this->pool[$charName];
        }

        if ($bc === null) {
            // ここでBigCharのインスタンスを作成
            $bc = new BigChar($charName);
            $this->pool[$charName] = $bc;
        }
        return $bc;
    }
}