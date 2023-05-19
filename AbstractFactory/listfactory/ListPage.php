<?php

namespace DesignPattern\AbstractFactory\ListFactory;

use DesignPattern\AbstractFactory\Factory\Page;

class ListPage extends Page
{
    public function __construct(string $title, string $author) {
        parent::__construct($title, $author);
    }

    public function makeHTML(): string {
        $buffer = '';
        $buffer .= "<html><head><title>{$this->title}</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>{$this->title}</h1>\n";
        $buffer .= "<ul>\n";
        foreach ($this->content as $item) {
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</ul>\n";
        $buffer .= "<hr><address>{$this->author}</address>\n";
        $buffer .= "</body></html>\n";
        return $buffer;
    }
}