<?php

namespace DesignPattern\Visitor;

require_once __DIR__ . '/Visitor.php';

class ListVisitor extends Visitor
{
    // 現在注目しているディレクトリ名
    private string $currentdir = '';

    // File訪問時
    public function visitFile(File $file): void
    {
        echo $this->currentdir . '/' . $file . "\n";
    }

    // Directory訪問時
    public function visitDirectory(Directory $directory): void
    {
        echo $this->currentdir . '/' . $directory . "\n";
        $savedir = $this->currentdir;
        $this->currentdir = $this->currentdir . '/' . $directory->getName();
        foreach ($directory as $entry) {
            $entry->accept($this);
        }
        $this->currentdir = $savedir;
    }
}