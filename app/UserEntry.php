<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEntry extends Model
{
    protected $fillable = ['duration', 'concise'];
}