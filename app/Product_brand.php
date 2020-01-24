<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_brand extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }
}
