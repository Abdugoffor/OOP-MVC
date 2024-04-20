<?php

namespace App\Models;

use Src\Database\Model;

class User extends Model
{
    protected $table = 'users';

    protected $filleable = ['name', 'tel', 'pas'];
    
}
