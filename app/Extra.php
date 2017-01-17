<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
	protected $primaryKey = 'extra_id';
    protected $fillable = ['attribute_name','attribute_value','product_id'];
    
}
