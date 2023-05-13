<?php

namespace DesignPatterns\FactoryMethod;

abstract class Factory
{
    public final function create(String $owner): Product
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    abstract protected function createProduct(String $owner): Product;
    abstract protected function registerProduct(Product $product): void;
}