<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 13/07/16
 * Time: 21:05
 */

/**
 * Cool tips on unit tests: https://www.youtube.com/watch?v=84j61_aI0q8
 */

use PHPUnit\Framework\TestCase;
use ctci\chapter01\question3\Permutation;

class PermutationTest extends TestCase
{
    /**
     * @var Permutation
     */
    protected $model;

    public function inputData()
    {
        return [
            ['ab', 'a', false],
            ['ab', 'ab', false],
            ['ab', 'ba', true],
            ['abc', 'acb', true],
            ['bac', 'bca', true],
            ['cab', 'cba', true],
            ['abcd', 'abdc', true],
        ];
    }

    public function setUp()
    {
        $this->model = new Permutation();
    }

    /**
     * @dataProvider inputData
     */
    public function testIsPermutation($string1, $string2, $result)
    {
        $this->assertEquals($result, $this->model->isPermutation($string1, $string2));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionIfNonStringIsPassed()
    {
        $this->assertTrue($this->model->isPermutation(1, true));
    }
}
