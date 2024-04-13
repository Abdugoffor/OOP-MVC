<?php

namespace Src\Support;

use ArrayAccess;

class Arr
{
    public static function only($arry, $keys)
    {
        // array_intersect_key : massivni key lari brxilini oladi
        return array_intersect_key($arry, array_filter((array) $keys));
    }

    public static function accessible($value)
    {
        return is_array($value) || $value instanceof ArrayAccess;
    }
}
