<?php
// https://www.ritolab.com/posts/143

namespace DesignPattern\Command\Ramen;

class Ramen
{
    private $name;
    private $ramen;

    public function setName($name)
    {
        $this->name = sprintf('%sラーメン', $name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRamen($ramen)
    {
        $this->ramen = $ramen;
    }

    public function getRamen()
    {
        return $this->ramen;
    }

    public function call()
    {
        echo sprintf("%s できたよー！\n", $this->getName());
    }
}