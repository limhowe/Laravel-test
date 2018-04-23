<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roman extends Model
{
    protected $table = 'romans';
    protected $fillable = ['roman_number', 'number'];
}
