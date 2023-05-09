<?php

namespace DesignPattern\Adapter\Extension;

interface PrintInterface
{
    public function printWeak(): void;
    public function printStrong(): void;
}