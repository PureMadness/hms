<?php

namespace App\Enums;

/**
 *
 */
abstract class AbstractEnum
{
    /**
     * Returns all the constants
     *
     * @return array
     */
    public static function getAll()
    {
        $class = new \ReflectionClass(get_called_class());

        return $class->getConstants();
    }
}
