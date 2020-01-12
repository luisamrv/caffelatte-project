<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sample extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function sample()
    {
    	return $this->belongsTo(Sample::class);
    }
}
