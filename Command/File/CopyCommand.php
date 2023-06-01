<?php

namespace DesignPattern\Command\File;

require_once 'Command.php';
require_once 'File.php';

/**
 * ConcreteCommandクラスに相当する
 */
class CopyCommand implements Command
{
    private $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }
    public function execute()
    {
        $file = new File('copy_of_' . $this->file->getName());
        $file->create();
    }
}
