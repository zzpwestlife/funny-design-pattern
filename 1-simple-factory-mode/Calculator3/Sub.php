<?php
require_once 'AbstractOperation.php';

class Sub extends AbstractOperation
{
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}
