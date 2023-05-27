<?php

namespace DesignPattern\ChainOfResponsibility;

require_once __DIR__ . '/Support.php';

class LimitSupport extends Support
{
    private int $limit;

    public function __construct(string $name, int $limit)
    {
        parent::__construct($name);
        $this->limit = $limit;
    }

    protected function resolve(Trouble $trouble): bool
    {
        // $limit以下の番号なら解決
        if ($trouble->getNumber() < $this->limit) {
            return true;
        }
        return false;
    }
}