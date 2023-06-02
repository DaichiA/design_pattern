<?php

namespace DesignPattern\Interpreter\Time;

require_once __DIR__ . '/ExpressionInterface.php';

class DatetimeExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        $command = $context->getCommand();

        switch ($command) {
            case 'year':
                echo date('Y') . ' ';
                break;
            case 'month':
                echo date('m') . ' ';
                break;
            case 'day':
                echo date('d') . ' ';
                break;
            case 'time':
                echo date('H:i') . ' ';
                break;
            case 'second':
                echo date('s') . ' ';
                break;
        }
    }
}