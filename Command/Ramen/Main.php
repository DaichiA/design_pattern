<?php

// Commandパターンは命令（処理）の要求自体をオブジェクト化し、処理対象のオブジェクトとの間に要求を管理・実行する
// オブジェクトを挟むことで、処理の追加や拡張を用意にしたり、キューやワーカーのような使い方、undoなども行える。
// この例ではラーメンを作ることをCommandオブジェクトとし、それをキュー（MacroCommandオブジェクト）に並べて、
// 実行命令が下ったら一斉に実行している。

namespace DesignPattern\Command\Ramen;

require_once __DIR__ . '/Queue.php';
require_once __DIR__ . '/Ramen.php';
require_once __DIR__ . '/ShoyuCommand.php';
require_once __DIR__ . '/MisoCommand.php';
require_once __DIR__ . '/ShioCommand.php';
require_once __DIR__ . '/TonkotsuCommand.php';

class Main
{
    public static function main()
    {
        $queue = new Queue();

        // ４人分のオーダーです。
        $queue->addCommand(new ShoyuCommand(new Ramen()));
        $queue->addCommand(new MisoCommand(new Ramen()));
        $queue->addCommand(new ShioCommand(new Ramen()));
        $queue->addCommand(new TonkotsuCommand(new Ramen()));

        $queue->run();

        echo "\n";

        // 次は、５人分のオーダーです。
        $queue->addCommand(new TonkotsuCommand(new Ramen()));
        $queue->addCommand(new MisoCommand(new Ramen()));
        $queue->addCommand(new TonkotsuCommand(new Ramen()));
        $queue->addCommand(new ShoyuCommand(new Ramen()));
        $queue->addCommand(new ShioCommand(new Ramen()));

        $queue->run();
    }

}

Main::main();