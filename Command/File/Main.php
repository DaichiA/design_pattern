<?php

// この例は本ではなくネットから https://shimooka.hateblo.jp/entry/20141216/1418705218


namespace DesignPattern\Command\File;

require_once 'Queue.php';
require_once 'TouchCommand.php';
require_once 'CompressCommand.php';
require_once 'CopyCommand.php';
require_once 'File.php';

class Main
{
    public static function main()
    {

        $queue = new Queue();
        $file = new File("sample.txt");
        $queue->addCommand(new TouchCommand($file));
        $queue->addCommand(new CompressCommand($file));
        $queue->addCommand(new CopyCommand($file));

        $queue->run();
    }
}

Main::main();