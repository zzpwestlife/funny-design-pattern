<?php

require_once 'CashSuper.php';

/**
 * @comment 正常收费子类
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 08:54
 * Class CashNormal
 */
class CashNormal extends CashSuper
{

    public function acceptCash(float $money)
    {
        return $money;
    }
}
