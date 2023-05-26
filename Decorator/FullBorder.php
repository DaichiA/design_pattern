<?php

require_once __DIR__ . '/Border.php';

class FullBorder extends Border
{
    public function __construct(Display $display) {
        parent::__construct($display);
    }

    public function getColumns(): int {
        // 文字数は中身の両端に飾り文字分を加えたもの
        return 1+ $this->display->getColumns() + 1;
    }

    public function getRows(): int {
        // 行数は中身の行数に上下の飾り文字分を加えたもの
        return 1 + $this->display->getRows() + 1;
    }

    public function getRowText(int $row): string {
        if ($row === 0) { // 上端の枠
            return '+' . $this->makeLine('-', $this->display->getColumns()) . '+';
        } elseif ($row === $this->display->getRows() + 1) { // 下端の枠
            return '+' . $this->makeLine('-', $this->display->getColumns()) . '+';
        } else {  // それ以外
            return '|' . $this->display->getRowText($row - 1) . '|';
        }
    }

    private function makeLine(string $string, int $count): string {
        $line = '';
        for ($i = 0; $i < $count; $i++) {
            $line .= $string;
        }
        return $line;
    }
}