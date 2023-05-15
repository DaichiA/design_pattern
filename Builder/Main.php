<?php

// Builderパターンは全体を構成している各部分を作り、段階を踏んで組み上げていくパターン

namespace DesignPattern\Builder;

require_once 'Builder.php';
require_once 'Director.php';
require_once 'HTMLBuilder.php';
require_once 'TextBuilder.php';

class Main
{
    public static function main(array $argv): void
    {
        if (count($argv) !== 2) {
            echo 'Usage: php index.php plain' . PHP_EOL;
            echo 'Usage: php index.php html' . PHP_EOL;
            exit(0);
        }

        if ($argv[1] === 'plain') {
            $textBuilder = new TextBuilder();
            $director = new Director($textBuilder);
            $director->construct();
            $result = $textBuilder->getResult();
            echo $result;
        } elseif ($argv[1] === 'html') {
            $htmlBuilder = new HTMLBuilder();
            $director = new Director($htmlBuilder);
            $director->construct();
            $filename = $htmlBuilder->getResult();
            echo $filename . 'が作成されました。' . PHP_EOL;
        } else {
            echo 'Usage: php index.php plain' . PHP_EOL;
            echo 'Usage: php index.php html' . PHP_EOL;
            exit(0);
        }
    }
}
$argv = ['aaa', 'html'];
Main::main($argv);