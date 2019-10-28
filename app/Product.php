<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image', 'price', 'discount', 'category'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    
    public function getDiscountPriceAttribute()
    {
        return $this->price-($this->price*$this->discount/100);	
    }
}
