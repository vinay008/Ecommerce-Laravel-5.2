<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'attribute_name', 'attribute_value','category_id'
    // ];
    protected $primaryKey='attribute_id';
    protected $fillable = ['attribute_name','category_id','category_name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */ 
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function Attribute()
    {
    return $this->belongsTo(Category::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
