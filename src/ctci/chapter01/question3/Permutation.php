<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 13/07/16
 * Time: 20:42
 */

/* Question 1.3
 * Given two strings, write a method to decide if one is a permutation of the other.
 */

namespace ctci\chapter01\question3;

use Util;

/**
 * Class Permutation
 *
 * @package ctci\chapter01\question3
 */
class Permutation
{
    /**
     * Checks if a string is a permutation of another string.
     *
     * @param string $str1
     * @param string $str2
     * @return boolean
     */
    public function isPermutation($str1, $str2)
    {
        Util::checkIsString($str1);
        Util::checkIsString($str2);

        /**
         * First check the length of the strings.
         * If they differ, one is not a permutation of the other
         */
        if (strlen($str1) != strlen($str2)) {
            return false;
        }

        /**
         * Check if the strings are identical.
         * They can't be identical. There must be at least one character with changed position.
         */
        if ($str1 === $str2) {
            return false;
        }
        
        /**
         * Check if ALL characters from $str1 are present in $str2.
         */
        foreach (str_split($str1) as $chr1) {
            $inStr2 = false;
            foreach (str_split($str2) as $chr2) {
                if ($chr1 === $chr2) {
                    $inStr2 = true;
                }
            }

            if (!$inStr2) {
                return false;
            }
        }

        return true;
    }
}
