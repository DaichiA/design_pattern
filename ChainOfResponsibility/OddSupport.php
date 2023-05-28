<?php

namespace DesignPattern\ChainOfResponsibility;

require_once __DIR__ . '/Support.php';

class OddSupport extends Support
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function resolve(Trouble $trouble): bool
    {
        // 奇数だったら解決
        if ($trouble->getNumber() % 2 === 1) {
            return true;
        }
        return false;
    }   
}