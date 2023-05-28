<?php

namespace DesignPattern\Mediator\gpt;

// Colleague（同僚）クラス
class User
{
    private $name;
    private $chatRoom;

    public function __construct($name, $chatRoom)
    {
        $this->name = $name;
        $this->chatRoom = $chatRoom;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sendMessage($message)
    {
        $this->chatRoom->showMessage($this, $message);
    }
}