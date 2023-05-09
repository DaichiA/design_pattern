<?php

namespace DesignPattern\Adapter\Extension;

require_once './Banner.php';
require_once './PrintInterface.php';

class PrintBanner extends Banner implements PrintInterface
{
    public function __construct(String $string)
    {
        parent::__construct($string);
    }

    public function printWeak(): void
    {
        $this->showWithParen();
    }

    public function printStrong(): void
    {
        $this->showWithAster();
    }
}