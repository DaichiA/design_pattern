<?php

namespace DesignPattern\Prototype;

require_once __DIR__ . '/Product.php';

class Manager
{
    private array $showcase = [];

    public function register(string $name, Product $prototype): void
    {
        $this->showcase[$name] = $prototype;
    }

    public function create(string $prototype_name): Product
    {
        $p = $this->showcase[$prototype_name];
        return $p->createCopy();
    }
}