<?php

require_once __DIR__ . '/Hand.php';
require_once __DIR__ . '/Strategy.php';

class Player {
    private string $name;
    private Strategy $strategy;
    private int $winCount = 0;
    private int $loseCount = 0;
    private int $gameCount = 0;

    public function __construct(string $name, Strategy $strategy) {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function nextHand(): Hand {
        return $this->strategy->nextHand();
    }

    public function win(): void {
        $this->strategy->study(true);
        $this->winCount++;
        $this->gameCount++;
    }

    public function lose(): void {
        $this->strategy->study(false);
        $this->loseCount++;
        $this->gameCount++;
    }

    public function draw(): void {
        $this->gameCount++;
    }

    public function toString(): string {
        $draw = $this->gameCount - ($this->winCount + $this->loseCount);
        return "{$this->name}: {$this->winCount}勝 {$this->loseCount}敗 {$draw}引き分け";
    }
}