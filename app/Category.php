<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name', 'isVisible','images'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function Category()
    {
        return $this->hasMany(products::class);
        return $this->hasMany(attributes::class);
    }
}

