<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['key', 'value', 'description', 'point'];
}
