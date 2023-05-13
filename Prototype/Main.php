<?php

// Prototypeパターンはクラスからインスタンスを作るのではなく、インスタンスをコピーして新しいインスタンスを作る時に使う

namespace DesignPattern\Prototype;

require_once __DIR__ . '/Manager.php';
require_once __DIR__ . '/MessageBox.php';
require_once __DIR__ . '/UnderlinePen.php';

class Main
{
    public static function main(): void
    {
        echo 'Start.' . '<br>';
        echo '<br>';

        $manager = new Manager();
        $upen    = new UnderlinePen('~');
        $mbox    = new MessageBox('*');
        $sbox    = new MessageBox('/');
        $manager->register('strong message', $upen);
        $manager->register('warning box', $mbox);
        $manager->register('slash box', $sbox);

        $p1 = $manager->create('strong message');
        $p1->use('Hello, world.');
        echo '<br>';

        $p2 = $manager->create('warning box');
        $p2->use('Hello, world.');
        echo '<br>';

        $p3 = $manager->create('slash box');
        $p3->use('Hello, world.');
        echo '<br>';

        echo 'End.' . '<br>';
    }
}

Main::main();