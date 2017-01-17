<?php

namespace App;


class Order extends  Model            
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'category','quantity', 'ordered_on','price','status','user_id','shipping_address','product_id','payment_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function Order()
{
    return $this->belongsTo(users::class);
     return $this->belongsTo(products::class);
}
    
}
