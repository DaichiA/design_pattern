<?php

interface Strategy {
    public function nextHand(): Hand;
    public function study(bool $win): void;
}