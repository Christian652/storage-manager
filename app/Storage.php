<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table = 'storages';

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function setProduct_idAttribute($value)
    {
        $storages = Storage::all();

        foreach($storages as $storage):
            if($value === $storage->product_id):
                return redirect()->route('storages.index');
            endif;
        endforeach;

        $this->product_id = $value;
    }
}
