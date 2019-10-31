<?php

require_once 'CashSuper.php';

/**
 * @comment 打折收费子类
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 08:55
 * Class CashRebate
 */
class CashRebate extends CashSuper
{
    private $discount;

    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function acceptCash(float $money)
    {
        return $money * $this->discount;
    }
}