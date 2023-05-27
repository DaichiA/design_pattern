<?php

namespace DesignPattern\ChainOfResponsibility;

require_once 'Support.php';

class NoSupport extends Support
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    protected function resolve(Trouble $trouble): bool
    {
        return false; // 自分は何も解決しない
    }
}