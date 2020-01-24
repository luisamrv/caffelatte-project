<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function product_brands()
    {
    	return $this->hasMany(Product_brand::class);
    }
}
