<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $fillable = [
        'Value','Type','Order','Id'
    ];
}
