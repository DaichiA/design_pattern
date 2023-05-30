<?php

// Flyweightパターンはインスタンスをできるだけ共有し、メモリの使用量を節約する。
// 感覚としてはSingletonに似ている。Singletonはインスタンスが1つであることを保証する一方、
// Flyweightは複数の異なるインスタンスを配列に持っておき、必要になったらnewするのではなく配列から取り出して渡すイメージ
// この例ではBigCharを表すために同じ数字を3回連続で表示することにした。

namespace DesignPattern\Flyweight;

require_once __DIR__ . '/BigString.php';

class Main
{
    public static function main(string $string)
    {
        if (mb_strlen($string) === 0) {
            echo '1文字以上必要です。';
            exit();
        }

        $bc = new BigString($string);
        $bc->echoChar();
    }
}

Main::main('1212123');