<?php

namespace DesignPattern\Observer;

interface Observer
{
    public function update(NumberGenerator $generator);
}