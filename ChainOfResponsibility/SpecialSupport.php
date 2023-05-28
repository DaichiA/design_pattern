<?php

namespace DesignPattern\ChainOfResponsibility;

require_once __DIR__ . '/Support.php';

class SpecialSupport extends Support
{
    private int $number;

    public function __construct(string $name, int $number)
    {
        parent::__construct($name);
        $this->number = $number;
    }

    protected function resolve(Trouble $trouble): bool
    {
        // 指定した番号なら解決
        if ($trouble->getNumber() === $this->number) {
            return true;
        }
        return false;
    }
}