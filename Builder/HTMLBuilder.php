<?php

namespace DesignPattern\Builder;

require_once 'Builder.php';

class HTMLBuilder extends Builder
{
    private string $buffer = '';

    public function makeTitle(string $title): void {
        $this->buffer .= '<html><head><title>' . $title . '</title></head><body>';
        $this->buffer .= '<h1>' . $title . '</h1>';
    }

    public function makeString(string $str): void {
        $this->buffer .= '<p>' . $str . '</p>';
    }

    public function makeItems(array $items): void {
        $this->buffer .= '<ul>';
        foreach ($items as $item) {
            $this->buffer .= '<li>' . $item . '</li>';
        }
        $this->buffer .= '</ul>';
    }

    public function close(): void {
        $this->buffer .= '</body></html>';
    }

    public function getResult(): string {
        return $this->buffer;
    }
}