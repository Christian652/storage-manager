<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'provider_id', 'id');
    }
}
