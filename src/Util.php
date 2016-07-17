<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 17/07/16
 * Time: 13:23
 */

class Util
{
    /**
     * Checks if a variable is string.
     * @param string $str
     * @throws InvalidArgumentException
     */
    public static function checkIsString($str)
    {
        if (! is_string($str)) {
            throw new \InvalidArgumentException;
        }
    }
}
