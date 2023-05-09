<?php

namespace DesignPattern\Adapter\Extension;

class Banner
{
    private String $string;

    public function __construct(String $string)
    {
        $this->string = $string;
    }

    public function showWithParen(): void
    {
        echo "(" . $this->string . ")" . '<br>';
    }

    public function showWithAster(): void
    {
        echo "*" . $this->string . "*" . '<br>';
    }
}