<?php

require_once __DIR__ . '/Hand.php';
require_once __DIR__ . '/Strategy.php';

class ProbStrategy implements Strategy {
    private array $history = [ //  初期値として均等に設定
        [1, 1, 1], // 1回目にグーを出した時の次の手それぞれの勝ち数
        [1, 1, 1], // 1回目にチョキを出した時の次の手それぞれの勝ち数
        [1, 1, 1]  // 1回目にパーを出した時の次の手それぞれの勝ち数
    ];
    private int $prevHandValue = 0;
    private int $currentHandValue = 0;

    public function nextHand(): Hand {
        $total = array_sum($this->history[$this->currentHandValue]);
        $rand = rand(0, $total - 1);
        $handValue = 0;
        for ($i = 0; $i < 3; $i++) { // デザインパターン本P152の解説の通り。
            $handValue += $this->history[$this->currentHandValue][$i];
            if ($handValue > $rand) {
                // 確率に基づいて手を選ぶ
                $this->prevHandValue = $this->currentHandValue;
                $this->currentHandValue = $i;
                return Hand::from($i);
            }
        }
    }

    public function study(bool $win): void {
        if ($win) {
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }
}