<?php

require_once __DIR__ . '/../fibonacci.php';

class fibonacciTest extends \PHPUnit\Framework\TestCase
{
    private Fibonacci $fibonacci;

    public function setUp(): void
    {
        $this->fibonacci = new Fibonacci();
        parent::setUp();
    }

    public function test_loopFibonacci()
    {
        $result = $this->fibonacci->loopFibonacci();
        $this->assertIsNumeric($result);
    }

    /**
     * @dataProvider additionSecondProvider
     */
    public function test_addZeros($a, $b, $expected)
    {
        $this->assertSame((int)$expected, (int)$this->fibonacci->addZeros($a, $b), 'method addZeros is correct');
    }

    /**
     * @dataProvider additionProvider
     */
    public function test_sum($a, $b, $expected)
    {
        $this->assertSame((int)$expected, (int)$this->fibonacci->sum($a, $b), 'method sum is correct');
    }

    public function additionProvider()
    {
        return [
            ['0', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666666', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666666'],
            ['0', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555'],
            ['10', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666666', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666676'],
            ['1', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666666', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666667']
        ];
    }

    public function additionSecondProvider()
    {
        return [
            ['10', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555', '00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000010'],
            ['20', '5555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555', '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000020'],
            ['10', '55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555556666666', '00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000010'],
        ];
    }

    public function test_length()
    {
        $this->assertSame(100, strlen($this->fibonacci->loopFibonacci()), 'method loopFibonacci is correct');
    }
}

