<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 13/07/16
 * Time: 20:42
 */

/* Question 1.1
 * Implement an algorithm to determine if a string has all unique characters.
 * What if you cannot use additional data structures?
 */

namespace ctci\chapter01\question1;

class Unique
{
    /**
     * Checks if a string has all unique characters.
     * It uses an additional data structure.
     *
     * @param string $str
     * @return boolean
     */
    public static function uniqueChars1($str)
    {
        if (! is_string($str)) {
            throw new \InvalidArgumentException;
        }

        # Every time a character appears on the string, add it to an array.
        $chars = [];
        for ($i = 0; $i < strlen($str); $i++) {
            if (isset($chars[$str[$i]])) {
                return false;
            } else $chars[$str[$i]] = true;
        }

        return true;
    }

    /**
     * Checks if a string has all unique characters.
     * No additional data structure.
     *
     * @param string $str
     * @return boolean
     */
    public static function uniqueChars2($str)
    {
        if (! is_string($str)) {
            throw new \InvalidArgumentException;
        }

        # Compare the first character with the others ...
        # Compare the second character with the others ...
        for ($i = 0; $i < strlen($str) - 1; $i++) {
            for ($s = $i + 1; $s < strlen($str); $s++) {
                if ($str[$i] == $str[$s]) return false;
            }
        }

        return true;
    }
}
