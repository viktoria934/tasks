<?php

require_once __DIR__ . '/../MyCalculator.php';

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
        $result = $this->myCalculator->addition();
        $this->assertSame(18, $result->result, 'method addition is incorrect');
    }

    public function test_subtraction()
    {
        $result = $this->myCalculator->subtraction();
        $this->assertSame(6, $result->result, 'method subtraction is incorrect');
    }

    public function test_multiplication()
    {
        $result = $this->myCalculator->multiplication();
        $this->assertSame(72, $result->result, 'method multiplication is incorrect');
    }

    public function test_division()
    {
        $result = $this->myCalculator->division();
        $this->assertSame(2, $result->result, 'method division is incorrect');
    }

    public function test_divisionBy()
    {
        $result = $this->myCalculator->addition()->divisionBy(9);
        $this->assertSame(2, $result->result, 'method addition+divisionBy is incorrect');
    }
}

