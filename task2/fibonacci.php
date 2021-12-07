<?php
declare(strict_types=1);

class Fibonacci
{
    /**
     * @param string $n
     * @return string
     */
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
        return $sum;
    }

    /**
     * @param string $first
     * @param string $second
     * @return string
     */
    public function sum(string $first, string $second): string
    {
        $result = '';
        $ten = 0;


        $first = $this->addZeros($first, $second);

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

    /**
     * @param string $first
     * @param string $second
     * @return string
     */
    public function addZeros(string $first, string $second): string
    {
        return str_pad($first, strlen($second), "0", STR_PAD_LEFT);
    }
}

$fibonacci = new Fibonacci();
echo $fibonacci->loopFibonacci('8') . PHP_EOL;

