<?php

require_once __DIR__ . '/Display.php';
class StringDisplay extends Display
{
    private string $string; // 表示文字列

    public function __construct(string $string) {
        $this->string = $string;
    }

    public function getColumns(): int {
        return mb_strlen($this->string);
    }

    public function getRows(): int {
        return 1; // 行数は1
    }

    public function getRowText(int $row): string {
        if ($row !== 0) {
            throw new Exception();
        }
        return $this->string;
    }
}