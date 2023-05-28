<?php

namespace DesignPattern\ChainOfResponsibility;

class Trouble
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    // トラブル番号を得る
    public function getNumber() 
    {
        return $this->number;
    }

    // トラブル番号の文字列表現
    public function __toString()
    {
        return '[Trouble' . $this->number . ']';
    }
}