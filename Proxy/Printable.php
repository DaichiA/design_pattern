<?php

namespace DesignPattern\Proxy;

interface Printable
{
    public function setPrinterName(string $name): void; // 名前の設定
    public function getPrinterName(): string; // 名前の設定
    public function print(string $string): void; // 文字列表示（プリントアウト）
}