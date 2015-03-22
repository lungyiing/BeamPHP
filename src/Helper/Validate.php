<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam\Helper;


class Validate
{

    /**
     * Validate a parameter as an integer
     *
     * @param mixed $param Any input
     * @throws \Exception
     */
    public static function int($param)
    {
        if (!is_numeric($param)) {
            throw new \Exception('Parameter must be numeric');
        }
    }

    /**
     * Check if a parameter is of an allowed value
     *
     * @param string $param Any string
     * @param array $allowed An array of acceptable values for $param
     * @throws \Exception
     */
    public static function limit($param, $allowed = [])
    {
        if (!in_array($param, $allowed)) {
            throw new \Exception('Parameter must be defined as allowed');
        }
    }

    /**
     * Checks if a parameter meets a min length
     *
     * @param string $param Any string input
     * @param int $length Any minimum string length
     * @throws \Exception
     */
    public static function length($param, $length)
    {
        if (strlen($param) < $length) {
            throw new \Exception('Parameter must meet minimum string length');
        }
    }

    /**
     * Checks if a string is json
     *
     * @param string $string Any string
     * @return bool
     */
    public static function json($string)
    {
        if (is_string($string) && is_object(json_decode($string))) {
            return true;
        } else {
            return false;
        }
    }
}