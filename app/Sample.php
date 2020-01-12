<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    public function finish()
    {
    	return $this->belongsTo(Finish::class);
    }

    public function product_samples()
    {
    	return $this->hasMany(Product_sample::class);
    }

    public function sample_languages()
    {
    	return $this->belongsTo(Sample_language::class);
    }
}
