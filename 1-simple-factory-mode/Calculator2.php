<?php

class Calculator2
{
    public static function getResult(int $numberA, int $numberB, string $operator)
    {
        $result = null;
        try {
            switch ($operator) {
                case '+':
                    $result = $numberA + $numberB;
                    break;
                case '-':
                    $result = $numberA - $numberB;
                    break;
                case '*':
                    $result = $numberA * $numberB;
                    break;
                case '/':
                    if ($numberB == 0) {
                        $result = '除数不能为 0';
                    } else {
                        $result = $numberA / $numberB;
                    }
                    break;
                default:
                    $result = '运算符号错误';
                    break;
            }

        } catch (Exception $e) {
            $result = '输入有误：' . $e->getMessage();
        }
        return $result;
    }

    public static function main()
    {
        echo "请输入数字 A: ";
        $handle = fopen("php://stdin", "r");
        $numberA = (int)fgets($handle);

        echo "请输入运算符号 (+、-、*、/): ";
        $handle = fopen("php://stdin", "r");
        $operator = trim(fgets($handle));

        echo "请输入数字 B: ";
        $handle = fopen("php://stdin", "r");
        $numberB = (int)fgets($handle);

        $result = self::getResult($numberA, $numberB, $operator);
        echo "\n";
        echo "运算结果是： " . $result . PHP_EOL;
    }
}

Calculator2::main();
