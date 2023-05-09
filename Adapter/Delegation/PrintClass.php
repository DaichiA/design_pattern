<?php

namespace DesignPattern\Adapter\Delegation;

abstract class PrintClass
{
    abstract public function printWeak(): void;
    abstract public function printStrong(): void;
}