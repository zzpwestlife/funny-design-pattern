<?php

/**
 * @comment 现金收费抽象类
 * 现金收取超类的抽象方法，收取现金，参数为原价，返回为当前价
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 08:52
 * Class CashSuper
 */
abstract class CashSuper
{
    abstract public function acceptCash(float $money);
}
