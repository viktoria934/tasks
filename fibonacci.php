<?php
/**
 * Template Name: fibonacci
 * Template Post Type: post, page
 */
function mathFibonacci($n)
{
    return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
}

function loopFibonacci($n)
{
    $first = 0;
    $second = 1;
    for ($i = 1; $i < $n; $i++) {
        $sum = $first + $second;
        $first = $second;
        $second = $sum;
    }
    return $sum;
}

function tailRecursionFibonacci($n)
{
    return recursionFibonacci($n);
}

function recursionFibonacci($n, $first = 0, $second = 1)
{
    $sum = $first + $second;
    if ($n !== 2) {
        calculateRecursionFibonacci($first, $second, $sum, $n);

        return recursionFibonacci($n, $first, $second);
    }
    return $sum;
}

function calculateRecursionFibonacci(&$first, &$second, $sum, &$n)
{
    $first = $second;
    $second = $sum;
    $n--;
}

$start = microtime(true);
echo "math: " . mathFibonacci(100);
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) * 100000 . "\n";

$start = microtime(true);
echo "loop: " . loopFibonacci(100);
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) * 100000 . "\n";

$start = microtime(true);
echo "tailRecursion: " . tailRecursionFibonacci(100), ' ';
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) * 100000 . "\n";

$start = microtime(true);
echo "recursion: " . recursionFibonacci(100);
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) * 100000 . "\n";
