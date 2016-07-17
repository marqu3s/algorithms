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
        self::validateParams($str);

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
        self::validateParams($str);

        # Compare the first character with the others ...
        # Compare the second character with the others ...
        for ($i = 0; $i < strlen($str) - 1; $i++) {
            for ($s = $i + 1; $s < strlen($str); $s++) {
                if ($str[$i] == $str[$s]) return false;
            }
        }

        return true;
    }

    /**
     * Checks if a string has all unique characters.
     * It breaks the string in an array, sorts it and loop thru it.
     * If the current character in the loop is equals to the previous char,
     * then there is at least one repeated character.
     * @param $str
     * @return bool
     */
    public static function uniqueChars3($str)
    {
        self::validateParams($str);

        $charArr = str_split($str);
        sort($charArr);
        $lastChar = null;
        foreach ($charArr as $char) {
            if ($char === $lastChar) {
                return false;
            }
            $lastChar = $char;
        }

        return true;
    }

    /**
     * Validate is the parameter is a string
     * @param string $str
     */
    private static function validateParams($str)
    {
        if (!is_string($str)) {
            throw new \InvalidArgumentException;
        }
    }
}
