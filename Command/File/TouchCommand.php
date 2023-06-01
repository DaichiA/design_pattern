<?php

namespace DesignPattern\Command\File;

require_once 'Command.php';
require_once 'File.php';

/**
 * ConcreteCommandクラスに相当する
 */
class TouchCommand implements Command
{
    private $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }
    public function execute()
    {
        $this->file->create();
    }
}