<?php

namespace DesignPattern\Command\Ramen;

require_once __DIR__ . '/CommandInterface.php';

class ShioCommand implements CommandInterface
{
    private $category = 'しお';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * 塩ラーメンを作る処理
         */

        $this->ramen->call();
    }
}
