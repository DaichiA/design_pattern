<?php

require_once __DIR__ . '/Border.php';

class SideBorder extends Border
{
    private string $borderChar;

    public function __construct(Display $display, string $borderChar) {
        parent::__construct($display);
        $this->borderChar = $borderChar;
    }

    public function getColumns(): int {
        // 文字数は中身の両端に飾り文字分を加えたもの
        return 1 + $this->display->getColumns() + 1;
    }

    public function getRows(): int {
        // 行数は中身の行数と同じ
        return $this->display->getRows();
    }

    public function getRowText(int $row): string {
        // 指定行の内容は中身の指定行の両端に飾り文字をつけたもの
        return $this->borderChar . $this->display->getRowText($row) . $this->borderChar;
    }
}