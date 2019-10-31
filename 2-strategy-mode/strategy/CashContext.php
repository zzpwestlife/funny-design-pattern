<?php

require_once 'CashNormal.php';
require_once 'CashReturn.php';
require_once 'CashRebate.php';

/**
 * @comment 上下文
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 09:01
 * Class CashContext
 */
class CashContext
{
    private $cs;

    /**
     * CashContext constructor.
     * @param CashSuper $cashSuper
     * 通过构造方法，传入具体的收费策略
     */
    public function __construct(CashSuper $cashSuper)
    {
        $this->cs = $cashSuper;
    }

    public function getResult(float $money)
    {
        return $this->cs->acceptCash($money);
    }
}