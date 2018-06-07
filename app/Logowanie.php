<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class Logowanie extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;  
	public $timestamps = false;
    protected $table = 'logowanie';
}
