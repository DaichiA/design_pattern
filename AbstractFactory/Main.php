<?php

namespace DesignPattern\AbstractFactory;

use DesignPattern\AbstractFactory\Factory\Factory;

require_once __DIR__ . '/factory/Factory.php';

class Main
{
    public static function main(array $array) {
        if (count($array) !== 2) {
            echo "引数の配列の要素数は2つで<br>";
            exit();
        }

        $file_name  = $array[0];
        $class_name = $array[1];

        $factory = Factory::getFactory($class_name);

        // Blog
        $blog1 = $factory->createLink('Blog1', 'https://example.com/blog1');
        $blog2 = $factory->createLink('Blog2', 'https://example.com/blog2');
        $blog3 = $factory->createLink('Blog3', 'https://example.com/blog3');

        $blogTray = $factory->createTray('Blog Site');
        $blogTray->add($blog1);
        $blogTray->add($blog2);
        $blogTray->add($blog3);

        // News
        $news1 = $factory->createLink('News1', 'https://example.com/news1');
        $news2 = $factory->createLink('News2', 'https://example.com/news2');
        $news3 = $factory->createTray('News3');
        $news3->add($factory->createLink('News3 (US)', 'https://example.com/news3US'));
        $news3->add($factory->createLink('News3 (JAPAN)', 'https://example.com/news3jp'));

        $newsTray = $factory->createTray('News Site');
        $newsTray->add($news1);
        $newsTray->add($news2);
        $newsTray->add($news3);

        // Page
        $page = $factory->createPage('Blog and News', 'Author');
        $page->add($blogTray);
        $page->add($newsTray);

        echo $file_name . '<br>';
    }
}

Main::main(['file_nameaaa', 'ListFactory']);