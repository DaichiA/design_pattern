<?php

namespace DesignPattern\AbstractFactory\Factory;

require_once __DIR__ . '/Item.php';

abstract class Tray extends Item
{
    protected array $tray = [];

    public function __construct(string $caption) {
        parent::__construct($caption);
    }

    public function add(Item $item): void {
        $this->tray[] = $item;
    }
}