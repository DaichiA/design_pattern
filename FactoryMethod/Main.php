<?php

// FactoryMethodパターンはインスタンスの作り方をスーパークラス側で定めて具体的な生成をサブクラスに任せるパターン

namespace DesignPatterns\FactoryMethod;

require_once __DIR__ . '/IDCardFactory.php';

class Main
{
    public static function main()
    {
        $factory = new IDCardFactory();
        $card1 = $factory->create('太郎');
        $card2 = $factory->create('花子');
        $card3 = $factory->create('ジョン');
        $card1->use();
        $card2->use();
        $card3->use();
        var_dump($factory->getOwners());
    }
}

Main::main();