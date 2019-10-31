<?php

require_once 'CashContext.php';

$cc = null;
$cashType = '打8折';
//$cashType = '正常收费';
//$cashType = '满300减100';
$cs = new CashContext($cashType);

$price = 12.3;
$count = 79;
$total = $cs->getResult($price * $count);
echo $total . PHP_EOL;

