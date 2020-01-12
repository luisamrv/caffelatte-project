<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function occupation()
    {
    	return $this->belongsTo(Occupation::class);
    }

    public function orders()
    {
    	return $this->hasMany(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
