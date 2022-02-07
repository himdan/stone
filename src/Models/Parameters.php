<?php

namespace Twedoo\Stone\Models;

use Illuminate\Database\Eloquent\Model;

class Parameters extends Model
{
    //
    protected $fillable = [
        'name', 'value'
    ];

    protected $table = "parameters";
}
