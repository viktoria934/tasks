<?php

require_once __DIR__ . '/../MyCalculator.php';
require_once __DIR__ . '/../DivisionByZero.php';

class calculatorTest extends \PHPUnit\Framework\TestCase
{
    private MyCalculator $myCalculator;

    public function setUp(): void
    {
        $this->myCalculator = new MyCalculator(12, 6);
        parent::setUp();
    }

    public function test_addition()
    {
        $result = (string)$this->myCalculator->addition();
        $this->assertSame('18', $result, 'method addition is incorrect');
    }

    public function test_subtraction()
    {
        $result = (string)$this->myCalculator->subtraction();
        $this->assertSame('6', $result, 'method subtraction is incorrect');
    }

    public function test_multiplication()
    {
        $result = (string)$this->myCalculator->multiplication();
        $this->assertSame('72', $result, 'method multiplication is incorrect');
    }

    public function test_division()
    {
        $result = (string)$this->myCalculator->division();
        $this->assertSame('2', $result, 'method division is incorrect');
    }

    public function test_divisionBy()
    {
        $result = (string)$this->myCalculator->addition()->divisionBy(9);
        $this->assertSame('2', $result, 'method addition+divisionBy is incorrect');
    }

    /**
     * @throws Exception
     */
    public function test_divisionByZero()
    {
        $this->expectException(DivisionByZero::class);
        $myCalculator = new MyCalculator(12, 0);
        $myCalculator->division();
    }
}

