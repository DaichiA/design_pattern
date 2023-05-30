<?php

namespace DesignPattern\Flyweight;

require_once __DIR__ . '/BigChar.php';
require_once __DIR__ . '/BigCharFactory.php';

class BigString
{
    private array $bigChars = [];

    public function __construct(string $string)
    {
        $factory      = BigCharFactory::getInstance();
        $lettersConut = mb_strlen($string);
        for ($i = 0; $i < $lettersConut; $i++) {
            $this->bigChars[$i] = $factory->getBigChar(mb_substr($string, $i, 1));
        }
    }

    public function echoChar()
    {
        foreach ($this->bigChars as $bigChar) {
            $bigChar->echoFont();
        }
    }
}