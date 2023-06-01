<?php

namespace DesignPattern\Command\Ramen;

require_once __DIR__ . '/CommandInterface.php';

class MisoCommand implements CommandInterface
{
    private $category = 'みそ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * 味噌ラーメンを作る処理
         */

        $this->ramen->call();
    }
}