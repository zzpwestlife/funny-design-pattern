<?php

require_once 'CashContext.php';

$cc = null;
$cashType = '打8折';
//$cashType = '正常收费';
//$cashType = '满300减100';
switch ($cashType) {
    case '正常收费':
        $cs = new CashContext(new CashNormal());
        break;
    case '满300减100':
        $cs = new CashContext(new CashReturn(300, 100));
        break;
    case '打8折':
        $cs = new CashContext(new CashRebate(0.8));
        break;
}

$price = 12.3;
$count = 79;
$total = $cs->getResult($price * $count);
echo $total . PHP_EOL;

