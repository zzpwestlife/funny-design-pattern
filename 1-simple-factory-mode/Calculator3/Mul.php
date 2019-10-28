<?php
require_once 'AbstractOperation.php';

class Mul extends AbstractOperation
{
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}
