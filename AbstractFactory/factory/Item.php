<?php

namespace DesignPattern\AbstractFactory\Factory;

abstract class Item
{
    protected string $caption;

    public function __construct(string $caption) {
        $this->caption = $caption;
    }

    public function getCaption(): string {
        return $this->caption;
    }

    public abstract function makeHTML(): string;
}