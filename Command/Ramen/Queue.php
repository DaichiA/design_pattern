<?php

namespace DesignPattern\Command\Ramen;

require_once __DIR__ . '/CommandInterface.php';

use DesignPattern\Command\Ramen\CommandInterface AS Command;

class Queue
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }
    public function addCommand(Command $command)
    {
        $this->commands[] = $command;
    }

    public function run()
    {
        if (!empty($this->commands)) {
            foreach ($this->commands as $command) {
                $command->execute();
            }
            $this->commands = [];
        }
    }
}