<?php

namespace DesignPattern\Interpreter\Time;

require_once __DIR__ . '/JobExpression.php';
require_once __DIR__ . '/Context.php';

class Main
{
    public static function main()
    {
        // コマンド
        $command = '$ year month day time second /';

        $job = new JobExpression();
        $job->execute(new Context($command));
    }
}

Main::main();