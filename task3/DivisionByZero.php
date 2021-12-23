<?php

/**
 * Define exception class for checking division by zero
 */
class DivisionByZero extends Exception
{
    public function __construct() {
        parent::__construct("Division by zero.");
    }
}
