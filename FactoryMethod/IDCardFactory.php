<?php

namespace DesignPatterns\FactoryMethod;

require_once __DIR__ . '/Factory.php';
require_once __DIR__ . '/IDCard.php';
require_once __DIR__ . '/Product.php';

class IDCardFactory extends Factory
{
    private array $owners = [];

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners(): array
    {
        return $this->owners;
    }
}