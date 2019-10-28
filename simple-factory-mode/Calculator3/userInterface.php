<?php

require_once 'CalculatorFactory.php';

$operation = CalculatorFactory::createOperation('+');
$operation->numberA = 1;
$operation->numberB = 2;

echo $operation->getResult() . PHP_EOL;
