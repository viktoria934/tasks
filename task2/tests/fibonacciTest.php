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
        $result = $this->fibonacci->loopFibonacci('10000');
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
            ['0', '0', '0'],
            ['0', '1', '1'],
            ['1', '0', '1'],
            ['1', '1', '2']
        ];
    }

    public function additionSecondProvider()
    {
        return [
            ['10', '1000', '0010'],
            ['20', '1000', '0020'],
            ['10', '10', '10'],
        ];
    }
}

