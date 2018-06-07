<?php

namespace App;

use Illuminate\Database\Eloqurnt\Model;
use Illuminate\Foundation\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    use \Illuminate\Foundation\Auth\Authenticatable;
    
}
