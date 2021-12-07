<?php

require_once __DIR__ . '/../fibonacci.php';

class fibonacciTest extends \PHPUnit\Framework\TestCase {

    public function test_digit() {
        $fibonacci = new Fibonacci();
        $result = $fibonacci->loopFibonacci('10000');
        $this->assertIsNumeric($result);
    }
}