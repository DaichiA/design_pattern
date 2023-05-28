<?php

namespace DesignPattern\Observer;

require_once __DIR__ . '/Observer.php';

class DigitObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo 'DigitObserver:' . $generator->getNumber() . "\n";
        sleep(1);
    }
}