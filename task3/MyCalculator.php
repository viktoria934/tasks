<?php
declare(strict_types=1);

class MyCalculator
{
    public $result;
    private $first, $second;

    public function __construct(int $first, int $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function addition(): object
    {
        $this->result += $this->first + $this->second;
        printf('addition: %s' . "\n", $this->result);
        return $this;
    }

    public function subtraction(): object
    {
        $this->result = $this->first - $this->second;
        printf('subtraction: %s' . "\n", $this->result);
        return $this;
    }

    public function multiplication(): object
    {
        $this->result = $this->first * $this->second;
        printf('multiplication: %s' . "\n", $this->result);
        return $this;
    }

    public function division(): object
    {
        $this->result = $this->first / $this->second;
        printf('division: %s' . "\n", $this->result);
        return $this;
    }

    public function divisionBy($third): object
    {
        printf('division: %s' . "\n", $this->result /= ($third));
        return $this;
    }
}

$mycalc = new MyCalculator(12, 6);
$mycalc->addition()->divisionBy(9);
