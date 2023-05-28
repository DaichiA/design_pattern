<?php

namespace DesignPattern\Observer;

class GraphObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo 'GraphObserver:';
        $int = $generator->getNumber();
        for ($i = 0; $i < $int; $i++) {
            echo '*';
        }
        echo "\n";

        sleep(1);
    }
}