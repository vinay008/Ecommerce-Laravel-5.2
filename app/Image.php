<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'image_id';
    protected $fillable = ['image_url','product_id'];


     public function product()
{
    return $this->belongsTo(Product::class);
}

}
