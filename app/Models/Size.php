<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $primaryKey = 'size_id';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany(
            'App\Models\Product',
            'product_details',
            'size_id',
            'product_id'
        )->withPivot('quantity');
    }
}
