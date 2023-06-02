<?php

namespace DesignPattern\Interpreter\Time;

interface ExpressionInterface
{
    public function execute(Context $context);
}