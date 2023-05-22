<?php

require_once __DIR__ . '/Hand.php';
require_once __DIR__ . '/Strategy.php';

class WinningStrategy implements Strategy {
    private Hand $prevHand = Hand::ROCK; // 初期値はグー
    private bool $won = false;

    public function nextHand(): Hand {
        if (!$this->won) {
            // 前回の勝負に負けた場合はランダムに手を選ぶ
            return $this->getRandomHand();
        }
        // 前回の勝負に勝った場合は同じ手を出す
        return $this->prevHand;
    }

    public function study(bool $win): void {
        $this->won = $win;
    }

    private function getRandomHand(): Hand {
        // ランダムに手を選ぶ
        $hands = [Hand::ROCK, Hand::PAPER, Hand::SCISSORS];
        return $hands[rand(0, 2)];
    }
}