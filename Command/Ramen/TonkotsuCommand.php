<?php

namespace DesignPattern\Command\Ramen;

require_once __DIR__ . '/CommandInterface.php';

class TonkotsuCommand implements CommandInterface
{
    private $category = 'とんこつ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * とんこつラーメンを作る処理
         */

        $this->ramen->call();
    }
}