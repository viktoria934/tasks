<?php
declare(strict_types=1);

require_once "./DivisionByZero.php";

/**
 * Сlass does addition, subtraction, division, multiplication operations between two numbers
 */
class MyCalculator
{
    /** @var float first number */
    private float $first;
    /** @var float second number */
    private float $second;
    /** @var float result between first and second */
    private ?float $result = null;

    /**
     * MyCalculator constructor.
     * @param float $first First number
     * @param float $second Second number
     */
    public function __construct(float $first, float $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->result;
    }

    /**
     * @return $this
     * Function does addition between two numbers
     */
    public function addition(): self
    {
        $this->result = $this->first + $this->second;

        return $this;
    }

    /**
     * @return $this
     * Function does subtraction between two numbers
     */
    public function subtraction(): self
    {
        $this->result = $this->first - $this->second;

        return $this;
    }

    /**
     * @return $this
     * Function does multiplication between two numbers
     */
    public function multiplication(): self
    {
        $this->result = $this->first * $this->second;

        return $this;
    }

    /**
     * @return $this
     * @throws Exception
     * Function does division between two numbers
     */
    public function division(): self
    {
        $this->result = $this->checkingDivisionByZero($this->first, $this->second);

        return $this;
    }

    /**
     * @param float $third
     * @return $this
     * @throws Exception
     * Function does division between two numbers
     */
    public function divisionBy(float $third): self
    {
        $this->result = $this->checkingDivisionByZero($this->result, $third);

        return $this;
    }

    /**
     * @param float $number
     * @param float $result
     * @return float
     * @throws Exception
     * Function checks division by zero
     */
    public function checkingDivisionByZero(float $number, float $result): float
    {
        if ((int)$result === 0) {
            throw new DivisionByZero();
        }

        return $number / $result;
    }
}

$mycalc = new MyCalculator(12, 0);
try {
    echo $mycalc->division();
} catch (DivisionByZero $divisionByZero) {
    echo $divisionByZero->getMessage();
}

