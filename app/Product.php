<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function sub_category()
    {
    	return $this->belongsTo(Sub_category::class);
    }

    public function product_languages()
    {
    	return $this->hasMany(Product_language::class);
    }

    public function similar()
    {
    	return $this->hasOne(Similar::class, 'id');
    }

    public function product_similars()
    {
    	return $this->hasMany(Product_similar::class);
    }

    public function article_products()
    {
    	return $this->hasMany(Article_product::class);
    }

    public function product_samples()
    {
    	return $this->hasMany(Product_sample::class);
    }
    
    public function product_currencies()
    {
        return $this->hasMany(Product_currency::class);
    }

    public function product_brands()
    {
        return $this->hasMany(Product_brand::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
