<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PropertyTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $user = (object) [
            'name' => 'Eric Machado',
            'email' => 'machado.eric58@gmail.com',
            'university' => 'UTFPR'
        ];

        $this->assertObjectHasProperty('name', $user);
        $this->assertObjectHasProperty('email', $user);
        $this->assertObjectHasProperty('university', $user);
    }
}
