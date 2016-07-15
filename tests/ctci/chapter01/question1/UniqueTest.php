<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 13/07/16
 * Time: 21:05
 */

use PHPUnit\Framework\TestCase;
use ctci\chapter01\question1\Unique;

class UniqueTest extends TestCase
{
    public function inputData()
    {
        return [
            ['abcdef', true],
            ['pizza', false]
        ];
    }

    /**
     * @dataProvider inputData
     */
    public function testHasUniqueChars1($string, $result)
    {
        $this->assertEquals($result, Unique::uniqueChars1($string));
    }

    /**
     * @dataProvider inputData
     */
    public function testHasUniqueChars2($string, $result)
    {
        $this->assertEquals($result, Unique::uniqueChars2($string));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionIfNonStringIsPassed()
    {
        $this->assertTrue(Unique::uniqueChars1(222));
    }
}
