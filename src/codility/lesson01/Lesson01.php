<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 07/08/16
 * Time: 21:25
 */

namespace codility\lesson01;

/**
 * Class Lesson01
 *
 * A binary gap within a positive integer N is any maximal sequence
 * of consecutive zeros that is surrounded by ones at both ends in
 * the binary representation of N.
 *
 * For example, number 9 has binary representation 1001 and contains
 * a binary gap of length 2. The number 529 has binary representation
 * 1000010001 and contains two binary gaps: one of length 4 and one
 * of length 3. The number 20 has binary representation 10100 and
 * contains one binary gap of length 1. The number 15 has binary
 * representation 1111 and has no binary gaps.
 *
 * @package codility\lesson01
 */
class Lesson01
{
    /**
     * Returns the length of the longest binary gap for the given number
     * @param int $n
     * @return int
     */
    public static function solution($n)
    {
        /**
         * DEC => BIN
         * 0   => 0
         * 1   => 1
         * 2   => 10
         * 3   => 11
         * 4   => 100
         * 5   => 101, 110, 111
         * 8   => 1000, 1001
         * We can safely return 0 for numbers less than 5.
         */
        if ($n < 5) return 0;

        # String representing the number in binary notation.
        $strBin = decbin($n);

        # Store the biggest gap.
        $biggestGap = 0;

        # The first character will always be 1
        # so we start walking the binary string from the second one.
        for ($pa = 1; $pa <= strlen($strBin)-1; $pa++) {
            $zeroCount = 0;
            while (isset($strBin[$pa]) && $strBin[$pa] === '0') {
                $zeroCount++;
                $pa++;
            }

            # The while loop above may terminate when the end of the
            # binary string is reached. Get back one character.
            if (!isset($strBin[$pa])) $pa--;

            # Check if the last character checked is 1.
            if ($strBin[$pa] === '1') {
                $biggestGap = $zeroCount > $biggestGap ? $zeroCount : $biggestGap;
            }
        }

        return $biggestGap;
    }
}
