<?php
declare(strict_types=1);

class Fibonacci
{
    public function sum(string $first, string $second): string
    {
        $result = '';
        $ten = 0;

        $first = $this->addNull($first, $second);

        for ($i = strlen($second) - 1; $i >= 0; $i--) {
            $sum = (int)$first[$i] + (int)$second[$i];
            $sumIntermediate = $sum + $ten;

            if ($sumIntermediate >= 10) {
                $ten = 1;
                $sumIntermediate = 10 - $sumIntermediate;
            } else {
                $ten = 0;
            }
            $result = abs($sumIntermediate) . $result;
        }
        if ($ten > 0) {
            $result = $ten . $result;
        }
        return $result;
    }

    public function addNull(string $first, string $second): string
    {
        if (strlen($first) <= strlen($second)) {
            $result = strlen($second) - strlen($first);
            $count = str_repeat('0', $result);
            $first = $count . $first;
        }
        return $first;
    }

    public function loopFibonacci(string $n): string
    {
        $first = '0';
        $second = '1';
        for ($i = 1; $i < $n; $i++) {
            $sum = $this->sum($first, $second);
            $first = $second;
            $second = $sum;
            if (strlen($sum) >= 100) {
                return $sum;
            }
        }
    }
}

$fibonacci = new Fibonacci();
echo $fibonacci->loopFibonacci('10000');

