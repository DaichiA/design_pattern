<?php

namespace DesignPattern\AbstractFactory\ListFactory;

use DesignPattern\AbstractFactory\Factory\Tray;

class ListTray extends Tray
{
    public function __construct(string $caption) {
        parent::__construct($caption);
    }

    public function makeHTML(): string {
        $buffer = '';
        $buffer .= "<li>\n";
        $buffer .= "{$this->caption}\n";
        $buffer .= "<ul>\n";
        foreach ($this->tray as $item) {
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</ul>\n";
        $buffer .= "</li>\n";
        return $buffer;
    }
}