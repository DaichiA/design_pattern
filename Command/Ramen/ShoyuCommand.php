<?php

namespace DesignPattern\Command\Ramen;

require_once __DIR__ . '/CommandInterface.php';

class ShoyuCommand implements CommandInterface
{
    private $category = 'しょうゆ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * 醤油ラーメンを作る処理
         */

        $this->ramen->call();
    }
}
