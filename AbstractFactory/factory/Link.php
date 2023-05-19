<?php

namespace DesignPattern\AbstractFactory\Factory;

require_once __DIR__ . '/Item.php';

abstract class Link extends Item
{
    protected string $url;

    public function __construct(string $caption, string $url) {
        parent::__construct($caption);
        $this->url = $url;
    }
}