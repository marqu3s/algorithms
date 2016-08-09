<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 08/08/16
 * Time: 21:09
 */

use PHPUnit\Framework\TestCase;
use codility\lesson02\CyclicRotation;

class CyclicRotationTest extends TestCase
{
    public function inputData()
    {
        return [
            [[3, 8, 9, 7, 6], 0, [3, 8, 9, 7, 6]],
            [[3, 8, 9, 7, 6], 1, [6, 3, 8, 9, 7]],
            [[3, 8, 9, 7, 6], 2, [7, 6, 3, 8, 9]],
            [[3, 8, 9, 7, 6], 3, [9, 7, 6, 3, 8]],
            [[3, 8, 9, 7, 6], 4, [8, 9, 7, 6, 3]],
            [[3, 8, 9, 7, 6], 5, [3, 8, 9, 7, 6]],
        ];
    }

    /**
     * @dataProvider inputData
     */
    public function testCyclicRotation($a, $k, $result)
    {
        $this->assertEquals($result, CyclicRotation::solution($a, $k));
    }
}
