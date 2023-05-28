<?php

// 本ではJavaのAWTフレームワークを使った解説なので、これはChatGPTに教わった例を。
// Mediatorパターンは複雑なオブジェクト間の相互の通信をやめ、Mediator役に情報を集中させることによって処理を整理する。

namespace DesignPattern\Mediator\gpt;

require_once __DIR__ . '/Chatroom.php';
require_once __DIR__ . '/User.php';

class Main
{
    public static function main()
    {
        $chatRoom = new ChatRoom();

        $user1 = new User("Alice", $chatRoom);
        $user2 = new User("Bob", $chatRoom);

        $user1->sendMessage("Hello, Bob!");
        $user2->sendMessage("Hi, Alice!");
    }
}

Main::main();