<?php

namespace DesignPattern\Prototype;

interface Product
{
    public function use(string $s): void;
    public function createCopy(): Product;
}