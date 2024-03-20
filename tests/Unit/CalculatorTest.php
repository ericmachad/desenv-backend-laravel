<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_addition(): void
    {
        $calculator = new Calculator();
        $a = 10;
        $b = 5;
        $result = $calculator->add($a, $b);
        $this->assertEquals($a + $b, $result);
    }

    public function test_subtract(): void
    {
        $calculator = new Calculator();
        $a = 10;
        $b = 5;
        $result = $calculator->subtract($a, $b);
        $this->assertEquals($a - $b, $result);
    }

}

class Calculator {
    public function add($a, $b){
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }
}