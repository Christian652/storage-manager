<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function storage()
    {
        return $this->belongsTo(Storage::class, 'id', 'product_id');
    }

    public function provider()
    {
        return $this->hasOne(Provider::class, 'id', 'provider_id');
    }
}
