<?php

namespace Src\Support;

class Hash
{
    public static function make($value)
    {
        return password_hash($value, PASSWORD_BCRYPT);
    }
}
