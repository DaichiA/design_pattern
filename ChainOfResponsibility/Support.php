<?php

namespace DesignPattern\ChainOfResponsibility;

require_once __DIR__ . '/Support.php';

abstract class Support
{
    private string $name;  // このトラブルの解決者の名前
    private $next;  // たらい回しの先

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->next = null;
    }

    // たらい回し先を設定する
    public function setNext(Support $next): Support
    {
        $this->next = $next;
        return $next;
    }

    // トラブルの解決手順を定める
    public function support(Trouble $trouble): void
    {
        if ($this->resolve($trouble)) {
            $this->done($trouble);
        } elseif ($this->next) {
            $this->next->support($trouble);
        } else {
            $this->fail($trouble);
        }
    }

    // トラブル解決者の文字列表現
    public function __toString()
    {
        return '[' . $this->name . ']';
    }

    // 解決しようとする
    protected abstract function resolve(Trouble $trouble): bool;

    // 解決した
    protected function done(Trouble $trouble): void
    {
        echo $trouble . 'is resolved by' . $this . ".\n";
    }

    // 解決しなかった
    protected function fail(Trouble $trouble): void
    {
        echo $trouble . "cannot be resolved.\n";
    }
}