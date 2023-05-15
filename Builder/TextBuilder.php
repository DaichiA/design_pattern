<?php

namespace DesignPattern\Builder;

require_once 'Builder.php';

class TextBuilder extends Builder
{
    private string $buffer = '';

    public function makeTitle(string $title): void {
        $this->buffer .= '==============================\n';
        $this->buffer .= "『{$title}』\n";
        $this->buffer .= "\n";
    }

    public function makeString(string $str): void {
        $this->buffer .= "■{$str}\n";
        $this->buffer .= "\n";
    }

    public function makeItems(array $items): void {
        foreach ($items as $item) {
            $this->buffer .= " ・{$item}\n";
        }
        $this->buffer .= "\n";
    }

    public function close(): void {
        $this->buffer .= '==============================\n';
    }

    public function getResult(): string {
        return $this->buffer;
    }
}