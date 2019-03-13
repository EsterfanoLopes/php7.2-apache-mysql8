<?php

namespace Tests\Controller;

use PHPUnit\Framework\TestCase;

class DumbTest extends TestCase
{
    /**
     * @dataProvider numbersProvider
     */
    public function testPlus($a, $b, $expected){
        $this->assertEquals($expected, $a + $b);
    }

    public function numbersProvider()
    {
        return [
            [2, 2, 4],
            [1, 1, 2],
            [0, 3, 3]
        ];
    }
}