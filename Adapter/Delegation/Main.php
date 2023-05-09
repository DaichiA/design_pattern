<?php

// アダプターパターンの利点は、既存のクラスを変更せずに新しいインターフェース（メソッド）を利用できる。
// 既存のクラスを変更せずに新しいインターフェース（メソッド）を利用できるので、既存のクラスを再利用できる。
// → バージョンアップ時に古い版との互換性を保てる。
// こちらは委譲パターン
// 一般的には、継承よりも委譲を使う方がトラブルが少ない。

namespace DesignPattern\Adapter\Delegation;

require_once __DIR__ . '/PrintBanner.php';

class Main
{
    public static function main(String $string) {
        $p = new PrintBanner($string);
        $p->printWeak();
        $p->printStrong();
    }
}


echo Main::main("Bye");