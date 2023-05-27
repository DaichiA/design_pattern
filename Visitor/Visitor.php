<?php

namespace DesignPattern\Visitor;

abstract class Visitor
{
    public abstract function visitFile(File $file): void;
    public abstract function visitDirectory(Directory $directory): void;
}