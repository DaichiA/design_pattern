<?php

namespace DesignPattern\AbstractFactory\ListFactory;

use DesignPattern\AbstractFactory\Factory\Factory;
use DesignPattern\AbstractFactory\Factory\Link;
use DesignPattern\AbstractFactory\Factory\Tray;
use DesignPattern\AbstractFactory\Factory\Page;

require_once __DIR__ . '/ListLink.php';
require_once __DIR__ . '/ListTray.php';
require_once __DIR__ . '/ListPage.php';

class ListFactory extends Factory
{
    public function createLink(string $caption, string $url): Link {
        return new ListLink($caption, $url);
    }

    public function createTray(string $caption): Tray {
        return new ListTray($caption);
    }

    public function createPage(string $title, string $author): Page {
        return new ListPage($title, $author);
    }
}