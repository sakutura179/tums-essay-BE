<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'product_details';
    protected $primaryKey = ['product_id', 'size_id'];
    protected $fillable = ['quantity'];

    public $incrementing = false;
}
