<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'product_id';
    protected $fillable = ['name_pro','quantity','category_name','price_pro','image'];


     public function Product()
{
    return $this->hasMany(orders::class);
    //return $this->hasMany(Image::class);
   // return $this->hasMany(Attribute::class);
    return $this->belongsTo(categories::class);
}
public function attribute()
    {
        return $this->hasMany(Attribute::class);
    }
    
    public function setImage()
    {

        return $this->hasMany(Image::class);
        Product()->create([
            'product_id'=>$this->product_id,
            ]);
    }

}
