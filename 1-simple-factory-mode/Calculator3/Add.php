<?php
require_once 'AbstractOperation.php';

class Add extends AbstractOperation
{
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}
