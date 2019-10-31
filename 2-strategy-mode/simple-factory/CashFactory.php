<?php

require_once 'CashNormal.php';
require_once 'CashReturn.php';
require_once 'CashRebate.php';

/**
 * @comment 现金收费工厂类
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 09:01
 * Class CashFactory
 */
class CashFactory
{
    public static function createCashAccept(string $type)
    {
        $cs = null;
        switch ($type) {
            case '正常收费':
                $cs = new CashNormal();
                break;
            case '满300减100':
                $cs = new CashReturn(300, 100);
                break;
            case '打8折':
                $cs = new CashRebate(0.8);
                break;
        }
        return $cs;
    }
}