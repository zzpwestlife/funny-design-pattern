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
     * @param string $type
     */
    public function __construct(string $type)
    {
        // 这里是一个简单工厂
        switch ($type) {
            case '正常收费':
                $this->cs = new CashNormal();
                break;
            case '满300减100':
                $this->cs = new CashReturn(300, 100);
                break;
            case '打8折':
                $this->cs = new CashRebate(0.8);
                break;
        }
    }

    public function getResult(float $money)
    {
        return $this->cs->acceptCash($money);
    }
}