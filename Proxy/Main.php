<?php

// Proxyパターンは、あるRealSubjectクラスに重い処理がある場合に、その処理を利用する時までインスタンス化せず,
// 代理となるProxyクラスをインスタンス化し、RealSubjectクラスしかできない処理以外を代理で任せ、
// RealSubjectクラスしかできない処理が呼ばれた場合に初めてインスタンスを生成・実行するようにする。

namespace DesignPattern\Proxy;

require_once __DIR__ . '/PrinterProxy.php';

class Main
{
    public static function main()
    {
        $p = new PrinterProxy('Alice');
        echo '名前は現在' . $p->getPrinterName() . "です\n";

        $p->setPrinterName('Bob');
        echo '名前は現在' . $p->getPrinterName() . "です\n";

        $p->print('Hello World.');
    }
}

Main::main();