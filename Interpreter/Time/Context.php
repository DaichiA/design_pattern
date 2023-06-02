<?php

namespace DesignPattern\Interpreter\Time;

class Context
{
    private $commands;
    private $index  = 0;

    public function __construct($command)
    {
        $this->commands = explode(' ', trim($command));
    }

    public function next()
    {
        $this->index++;
        return $this;
    }

    public function getCommand()
    {
        if (!array_key_exists($this->index, $this->commands)) {
            return null;
        }
        return $this->commands[$this->index];
    }
}
