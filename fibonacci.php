<?php
/**
 * Template Name: fibonacci
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage fibonacci
 * @since fibonacci
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
    if ($n < 3) {
        return 1;
    } else {
        return TailRecursionFibonacci($n - 1) + TailRecursionFibonacci($n - 2);
    }
}

function recursionFibonacci($n, $first = 0, $second = 1)
{
    $sum = $first + $second;
    if ($n !== 2) {
        $first = $second;
        $second = $sum;
        $n--;
        return recursionFibonacci($n, $first, $second);
    } else {
        return $sum;
    }
}

$start = microtime(true);
echo "math: " . mathFibonacci(15);
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.' . "<br/>";

$start = microtime(true);
echo "loop: " . loopFibonacci(15);
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.' . "<br/>";

$start = microtime(true);
echo "tailRecursion: " . tailRecursionFibonacci(15), ' ';
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.' . "<br/>";

$start = microtime(true);
echo "recursion: " . recursionFibonacci(15);
echo ' Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.' . "<br/>";