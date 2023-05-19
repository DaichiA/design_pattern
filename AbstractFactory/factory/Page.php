<?php

namespace DesignPattern\AbstractFactory\Factory;

require_once __DIR__ . '/Item.php';

abstract class Page
{
    protected string $title;
    protected string $author;
    protected array $content = [];

    public function __construct(string $title, string $author) {
        $this->title  = $title;
        $this->author = $author;
    }

    public function add(Item $item): void {
        $this->content[] = $item;
    }

    public function output(): void {
        try {
            $filename = $this->title . '.html';
            $content  = $this->makeHTML();
            file_put_contents($filename, $content);
            echo $filename . 'を作成しました。' . PHP_EOL;
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    public abstract function makeHTML(): string;
}