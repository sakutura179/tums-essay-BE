<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $table = 'invoice_details';
    protected $primaryKey = ['invoice_id', 'product_id'];
    protected $fillable = ['quantity', 'total'];

    public $incrementing = false;
}
