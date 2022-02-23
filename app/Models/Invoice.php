<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'invoice_id';
    protected $fillable = [
        'customerName',
        'phone',
        'email',
        'city',
        'district',
        'ward',
        'address',
        'note',
        'total_invoice'
    ];

    public function products()
    {
        return $this->belongsToMany(
            'App\Models\Product',
            'invoice_details',
            'invoice_id',
            'product_id'
        )->withPivot('quantity', 'total');
    }
}
