<?php

namespace DesignPattern\Visitor;

interface Element
{
    public function accept(Visitor $visitor);
}