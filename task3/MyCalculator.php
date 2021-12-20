<?php
declare(strict_types=1);

class MyCalculator
{
    private int $first;
    private int $second;
    private int $result;

    public function __construct(int $first, int $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function __toString(): string
    {
        return (string)$this->result;
    }

    public function addition(): self
    {
        $this->result = $this->first + $this->second;
        return $this;
    }

    public function subtraction(): self
    {
        $this->result = $this->first - $this->second;
        return $this;
    }

    public function multiplication(): self
    {
        $this->result = $this->first * $this->second;

        return $this;
    }

    public function division(): self
    {
        $this->result = $this->divisionByZero($this->second, $this->first);
        return $this;
    }

    public function divisionBy(int $third): self
    {
        $this->result = $this->divisionByZero($third, $this->result);
        return $this;
    }

    public function divisionByZero(int $number, int $result): int
    {
        if ($number != 0) {
            $result /= $number;
        } else {
            $result = 0;
        }
        return $result;
    }
}

$mycalc = new MyCalculator(12, 6);

echo $mycalc->addition()->divisionBy(9);
