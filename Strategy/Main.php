<?php

// Strategyパターンはアルゴリズムのインターフェースの部分だけ規定し、中身は委譲で受け取る。
// これによって簡単にアルゴリズムを切り替えることができる。

require_once __DIR__ . '/Player.php';
require_once __DIR__ . '/WinnigStrategy.php';
require_once __DIR__ . '/ProbStrategy.php';

class Main {
    public static function main(): void {
        $taro = new Player("Taro", new WinningStrategy());
        $hana = new Player("Hana", new ProbStrategy());

        for ($i = 0; $i < 100; $i++) {
            $taroHand = $taro->nextHand();
            $hanaHand = $hana->nextHand();

            if ($taroHand == $hanaHand) {
                $taro->draw();
                $hana->draw();
                echo "引き分けです。\n";
            } elseif (
                ($taroHand == Hand::ROCK && $hanaHand == Hand::SCISSORS) ||
                ($taroHand == Hand::PAPER && $hanaHand == Hand::ROCK) ||
                ($taroHand == Hand::SCISSORS && $hanaHand == Hand::PAPER)
            ) {
                $taro->win();
                $hana->lose();
                echo "{$taro->toString()}、{$taroHand->name}でTaroの勝ちです。\n";
            } else {
                $taro->lose();
                $hana->win();
                echo "{$hana->toString()}、{$hanaHand->name}でHanaの勝ちです。\n";
            }
        }

        echo "最終結果:\n";
        echo "{$taro->toString()}\n";
        echo "{$hana->toString()}\n";
    }
}

// メイン処理の実行
Main::main();