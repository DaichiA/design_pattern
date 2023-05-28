<?php

namespace DesignPattern\Memento;

require_once __DIR__ . '/Mement.php';

class Gamer
{
    private int $money;
    private array $fruits = [];
    private array $fruitsName = ['りんご', 'ぶどう', 'バナナ', 'みかん'];

    public function __construct(int $money)
    {
        $this->money = $money;
    }

    // 現在の所持金を得る
    public function getMoney(): int
    {
        return $this->money;
    }

    // 賭ける ... ゲームの進行
    public function bet(): void
    {
        // サイコロを振る
        $dice = mt_rand(1, 6);
        if ($dice === 1) {
            // 1の場合...所持金が増える
            $this->money += 100;
            echo "所持金が増えました。\n";
        } else if ($dice === 2) {
            // 2の場合...所持金が半分になる
            $this->money /= 2;
            echo "所持金が半分になりました。\n";
        } else if  ($dice === 6) {
            // 6の場合...フルーツをもらう
            $fruit = $this->getFruits();
            echo "フルーツ（" . $fruit . "）をもらいました。\n";
            $this->fruits[] = $fruit;
        } else {
            echo "何も起こりませんでした。\n";
        }
    }

    // スナップショットを取る
    public function createMemento(): Memento
    {
        $memento = new Memento($this->money);
        foreach ($this->fruits as $fruit) {
            // フルーツはおいしいものだけ保存
            if (str_starts_with($fruit, 'おいしい')) {
                $memento->addFruit($fruit);
            }
        }
        return $memento;
    }

    // undoを行う
    public function restoreMemento(Memento $memento): void
    {
        $this->money = $memento->getMoney();
        $this->fruits = $memento->getFruits();
    }

    public function __toString()
    {
        return "money: " . $this->money . ", fruits: " . implode(',', $this->fruits);
    }

    // フルーツを１個得る
    private function getFruits(): string
    {
        $fruit = $this->fruitsName[mt_rand(0, count($this->fruitsName) - 1)];
        if ((bool)rand(0,1)) {
            return 'おいしい' . $fruit;
        } else {
            return $fruit;
        }
    }
}