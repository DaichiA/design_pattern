<?php

namespace DesignPattern\Mediator\gpt;

// Mediator（調停者）クラス
class ChatRoom
{
    public function showMessage($user, $message)
    {
        $time   = date('Y-m-d H:i:s');
        $sender = $user->getName();
        echo "[$time] $sender: $message\n";
    }
}