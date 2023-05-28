<?php

namespace DesignPattern\Memento;

class Memento
{
    private int $money;
    private array $fruits;

    // コンストラクタ（wide interface）
    public function __construct(int $money)
    {
        $this->money = $money;
        $this->fruits = [];
    }

    // 所持金を得る（narrow interface）
    public function  getMoney(): int
    {
        return $this->money;
    }

    // フルーツを追加する（wide interface）
    public function addFruit(string $fruit): void
    {
        $this->fruits[] = $fruit;
    }

    // フルーツを得る（wide interface）
    public function getFruits(): array
    {
        return $this->fruits;
    }
}