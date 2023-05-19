<?php

namespace DesignPattern\AbstractFactory\ListFactory;

use DesignPattern\AbstractFactory\Factory\Link;

class ListLink extends Link
{
    public function __construct(string $caption, string $url) {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string {
        return "  <li><a href=\"{$this->url}\">{$this->caption}</a></li>\n";
    }
}