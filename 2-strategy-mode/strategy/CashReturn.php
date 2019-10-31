<?php

require_once 'CashSuper.php';

/**
 * @comment 返利收费子类
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 08:57
 * Class CashReturn
 */
class CashReturn extends CashSuper
{
    private $total;
    private $sub;

    public function __construct($total, $sub)
    {
        $this->total = $total;
        $this->sub = $sub;
    }

    public function acceptCash(float $money)
    {
        $result = $money;
        if ($money >= $this->total) {
            $result = $money - floor($money / $this->total) * $this->sub;
        }

        return $result;
    }
}