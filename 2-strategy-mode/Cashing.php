<?php

/**
 * @comment 商场收银系统
 * @author ZouZhipeng <zzpwestlife@gmail.com>
 * @date 2019/10/30
 * @time 08:40
 * Class Cashing
 */
class Cashing
{
    private $total = 0.0;
    private $caption = '';
    public $discount;

    public function __construct(float $discount = 10.0)
    {
        $this->discount = $discount;
    }

    public function count(float $price, int $count): string
    {
        $this->total += $price * $count * $this->discount / 10;
        $this->caption = sprintf('单价： %f, 数量： %d, 折扣：%f, 合计： %f', $price, $count, $this->discount, $this->total);
        return $this->caption . PHP_EOL;
    }
}

$cashing = new Cashing(8);
echo $cashing->count(5.6, 7);