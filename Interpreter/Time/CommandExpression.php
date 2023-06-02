<?php

namespace DesignPattern\Interpreter\Time;

require_once __DIR__ . '/ExpressionInterface.php';
require_once __DIR__ . '/DatetimeExpression.php';

class CommandExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        while (true) {
            $text = $context->getCommand();
            if (is_null($text)) {
                throw new \Exception('There is no closing command "/"');
            } else if ($text === '/') {
                break;
            } else {
                $expression = new DatetimeExpression();
                $expression->execute($context);
            }
            $context->next();
        }
    }
}