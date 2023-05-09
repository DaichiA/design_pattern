<?php

namespace DesignPattern\Adapter\Delegation;

require_once __DIR__ .  '/PrintClass.php';
require_once __DIR__ .  '/Banner.php';

class PrintBanner extends PrintClass
{
    private Banner $banner;

    public function __construct(String $string)
    {
        $this->banner = new Banner($string);
    }

    public function printWeak(): void
    {
        $this->banner->showWithParen();
    }

    public function printStrong(): void
    {
        $this->banner->showWithAster();
    }
}