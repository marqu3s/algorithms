<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 19/08/16
 * Time: 08:16
 */

use PHPUnit\Framework\TestCase;
use codility\lesson02\OddOccurrencesInArray;

class OddOccurrencesInArrayTest extends TestCase
{
    public function inputData()
    {
        return [
            [[1, 1, 2], 2],
            [[1, 2, 1], 2],
            [[2, 1, 1], 2],
            [[3, 5, 3, 7, 5], 7],
            [[3, 6, 9, 6, 3], 9],
        ];
    }

    /**
     * @dataProvider inputData
     */
    public function testCyclicRotation($a, $result)
    {
        $this->assertEquals($result, OddOccurrencesInArray::solution($a));
    }
}
