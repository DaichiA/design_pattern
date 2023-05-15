<?php

namespace DesignPattern\Builder;

abstract class Builder
{
    public abstract function makeTitle(string $title): void;
    public abstract function makeString(string $str): void;
    public abstract function makeItems(array $items): void;
    public abstract function close(): void;
}