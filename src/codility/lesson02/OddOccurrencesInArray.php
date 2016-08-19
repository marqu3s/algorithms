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
 * A non-empty zero-indexed array A consisting of N integers
 * is given. The array contains an odd number of elements,
 * and each element of the array can be paired with another
 * element that has the same value, except for one element
 * that is left unpaired.
 *
 * Write a function that, given an array A consisting of N
 * integers fulfilling the above conditions, returns the
 * value of the unpaired element.
 *
 * @package codility\lesson02
 */
class OddOccurrencesInArray
{
    /**
     * Given an array A consisting of N integers, returns
     * the value of the unpaired element.
     * @param array $a Example: [1, 2, 1, 2, 5]
     * @return integer
     */
    public static function solution($a)
    {
        sort($a, SORT_NUMERIC);
        $i = 0;
        $l = count($a) - 1;
        while ($i <= $l) {
            // if checking the last item in array this means it is not matched to a previous pair.
            if ($i === $l) return $a[$i];

            // if the next element is different, then return the current value;
            if ($a[$i] !== $a[$i+1]) return $a[$i];

            // Go to next pair
            $i += 2;
        }
    }
}
