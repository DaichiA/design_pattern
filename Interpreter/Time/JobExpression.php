<?php

namespace DesignPattern\Interpreter\Time;

require_once __DIR__ . '/CommandExpression.php';

class JobExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        if ($context->getCommand() !== '$') {
            throw new \Exception('Missing opening tag "$"');
        }
        $command_list = new CommandExpression();
        $command_list->execute($context->next());
    }
}