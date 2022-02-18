<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['name', 'slug', 'price', 'desc', 'quantity', 'cate_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cate_id', 'cate_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image', 'product_id', 'product_id');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size', 'product_details', 'product_id', 'size_id');
    }

    public function invoices()
    {
        return $this->belongsToMany('App\Models\Invoice', 'invoice_details', 'product_id', 'invoice_id');
    }
}
