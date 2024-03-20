<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_lenght(): void
    {
        $stringManipulator = new StringManipulator();
        $string = 'Test';
        $character = 's';
        $lenght = $stringManipulator->countCharacter($string);
        $containCharacter = $stringManipulator->containsCharacter($string, $character);

        $this->assertTrue($containCharacter);
        $this->assertEquals($lenght, 4);
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

class StringManipulator {
    public function countCharacter($string){
        return strlen($string);
    }

    public function containsCharacter($string, $character) {
        $posicao = strpos($string, $character);
        if($posicao !== false){
            return true;
        }
        else {
            return false;
        }
    }
}