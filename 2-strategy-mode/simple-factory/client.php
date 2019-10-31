<?php

require_once 'CashFactory.php';

// 利用简单工厂模式，根据下拉选择框，生成相应的对象
$string = '打8折';
$cs = CashFactory::createCashAccept($string);

$price = 12.4;
$count = 21;
$total = $cs->acceptCash($price * $count);
echo $total . PHP_EOL;

