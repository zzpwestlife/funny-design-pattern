<?php

require_once 'Add.php';
require_once 'Sub.php';
require_once 'Mul.php';
require_once 'Div.php';

class CalculatorFactory
{
    public static function createOperation(string $operator)
    {
        $operation = null;
        switch ($operator) {
            case '+':
                $operation = new Add();
                break;
            case '-':
                $operation = new Sub();
                break;
            case '*':
                $operation = new Mul();
                break;
            case '/':
                $operation = new Div();
                break;
        }

        return $operation;
    }
}
