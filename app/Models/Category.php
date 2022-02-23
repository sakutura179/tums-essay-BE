<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'cate_id', 'cate_id');
    }
}
