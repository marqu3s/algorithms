<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 08/08/16
 * Time: 21:03
 */

namespace codility\lesson02;

/**
 * Class Lesson02
 *
 * A zero-indexed array A consisting of N integers is given.
 * Rotation of the array means that each element is shifted
 * right by one index, and the last element of the array is
 * also moved to the first place.
 *
 * For example, the rotation of array A = [3, 8, 9, 7, 6] is
 * [6, 3, 8, 9, 7]. The goal is to rotate array A K times;
 * that is, each element of A will be shifted to the right
 * by K indexes.
 *
 * @package codility\lesson02
 */
class CyclicRotation
{
    /**
     * Given a zero-indexed array $a consisting of N integers
     * and an integer $k, returns the array $a rotated K times.
     * Returns the rotated array.
     * @param array $a Example: [1, 2, 3, 4]
     * @param int $k Example: 2
     * @return array Example: [3, 4, 1, 2]
     */
    public static function solution($a, $k)
    {
        $length = count($a);
        if ($k === 0 || $k === $length) return $a;

        if ($k > $length) {
            $k = $k % $length;
        }

        for ($i = $length - $k; $i <= $length - 1; $i++) {
            $result[] = $a[$i];
        }

        for ($i = 0; $i < $length - $k; $i++) {
            $result[] = $a[$i];
        }

        return $result;
    }
}
