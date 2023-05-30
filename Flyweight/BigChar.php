<?php

namespace DesignPattern\Flyweight;

class BigChar
{
    private string $charName; // 文字の名前
    private string $fontData; // 大きな文字を表現する文字列（同じ数字3つの並び）

    public function __construct(string $charName) {
        $this->charName = $charName;

        $fileName = 'FontData/big' . $this->charName . '.txt';
        $this->fontData = file_get_contents($fileName, FILE_USE_INCLUDE_PATH, null, 0, null);
    }

    public function echoFont() {
        echo $this->fontData;
    }
}