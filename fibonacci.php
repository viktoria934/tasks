<?php
/**
 * Template Name: fibonacci
 * Template Post Type: post, page
 */
function mathFibonacci(int $n): int
{
    return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
}

function loopFibonacci(int $n): int
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

function recursionFibonacci(int $n): int
{
    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return 1;
    }
    return recursionFibonacci($n - 1) + recursionFibonacci($n - 2);
}

function tailRecursionFibonacci(int $n, int $first = 0, int $second = 1): int
{
    if ($n == 0) {
        return $first;
    }
    if ($n == 1) {
        return $second;
    }
    return tailRecursionFibonacci(--$n, $second, $first + $second);
}

$limit = 1000000;
$start = microtime(true);
$n = 8;
while ($n < $limit) {
    $n++;
    mathFibonacci(8);
}
echo "math: ";
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) . "\n";

$start = microtime(true);
$n = 8;
while ($n < $limit) {
    $n++;
    loopFibonacci(8);
}
echo "loop: ";
echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . "\n";

$start = microtime(true);
$n = 8;
while ($n < $limit) {
    $n++;
    tailRecursionFibonacci(8);
}
echo "tailRecursion: ";
echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . "\n";

$start = microtime(true);
$n = 8;
while ($n < $limit) {
    $n++;
    recursionFibonacci(8);
}
echo "recursion: ";
echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . "\n";
