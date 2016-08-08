<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 07/08/16
 * Time: 21:27
 */

use PHPUnit\Framework\TestCase;
use codility\lesson01\Lesson01;

class Lesson01Test extends TestCase
{
    public function inputData()
    {
        return [
            [-1, 0],
            [0, 0],
            [9, 2],
            [15, 0],
            [20, 1],
            [529, 4],
            [1041, 5],
        ];
    }

    /**
     * @dataProvider inputData
     */
    public function testBinaryGap($number, $result)
    {
        $this->assertEquals($result, Lesson01::solution($number));
    }
}
