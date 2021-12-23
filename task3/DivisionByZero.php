<?php

/**
 * Определим свой класс исключения
 */
class DivisionByZero extends Exception
{
    public function __construct() {
        parent::__construct("Division by zero.");
    }
}
