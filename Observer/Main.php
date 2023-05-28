<?php

// Observerパターンは観察対象の状態が変化したことが観察者に通知される。状況変化に応じた処理を記述するときに有効。
// ObserverパターンはSubject役（今回はNumberGeneratorクラス）から「通知」されるのを受動的に待っていることになるので、別名「Publish-Subscribeパターン」と呼ばれることもある。
// 今回の例では、RandomNumberGeneratorがランダムに数字を生成し、生成するたびにDigitObserverとGraphObserverに通知、各Observerが必要な処理をした。

namespace DesignPattern\Observer;

require_once __DIR__ . '/RandomNumberGenerator.php';
require_once __DIR__ . '/DigitObserver.php';
require_once __DIR__ . '/GraphObserver.php';

class Main
{
    public static function main()
    {
        $generator = new RandomNumberGenerator();
        $observer1 = new DigitObserver();
        $observer2 = new GraphObserver();
        $generator->addObserver($observer1);
        $generator->addObserver($observer2);
        $generator->execute();
    }
}

Main::main();