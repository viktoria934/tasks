<?php
declare(strict_types=1);

class MyCalculator
{
    private float $first;
    private float $second;
    private float $result;

    /**
     * MyCalculator constructor.
     * @param float $first
     * @param float $second
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
     */
    public function addition(): self
    {
        $this->result = $this->first + $this->second;
        return $this;
    }

    /**
     * @return $this
     */
    public function subtraction(): self
    {
        $this->result = $this->first - $this->second;
        return $this;
    }

    /**
     * @return $this
     */
    public function multiplication(): self
    {
        $this->result = $this->first * $this->second;

        return $this;
    }

    /**
     * @return $this
     */
    public function division(): self
    {
        try {
            $this->result = $this->checkingDivisionByZero($this->first, $this->second);
        } catch (Exception $e) {
            echo 'An exception was thrown: ', $e->getMessage(), "\n";
        }
        return $this;
    }

    /**
     * @param float $third
     * @return $this
     */
    public function divisionBy(float $third): self
    {
        try {
            $this->result = $this->checkingDivisionByZero($this->result, $third);
        } catch (Exception $e) {
            echo 'An exception was thrown: ', $e->getMessage(), "\n";
        }
        return $this;
    }

    /**
     * @param float $number
     * @param float $result
     * @return float
     */
    public function checkingDivisionByZero(float $number, float $result): float
    {
        if ($number != 0) {
            $result = $number / $result;
        } else {
            throw new Exception('Division by zero.');
        }
        return $result;
    }
}

$mycalc = new MyCalculator(12, 6);

echo $mycalc->addition()->divisionBy(9);
