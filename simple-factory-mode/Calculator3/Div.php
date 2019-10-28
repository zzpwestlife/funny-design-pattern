<?php
require_once 'AbstractOperation.php';

class Div extends AbstractOperation
{
    public function getResult()
    {
        if ($this->numberB == 0) {
            throw new Exception('除数不能为 0');
        }
        return $this->numberA / $this->numberB;
    }
}
