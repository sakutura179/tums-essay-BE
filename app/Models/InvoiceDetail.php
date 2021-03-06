<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $table = 'invoice_details';
    protected $primaryKey = ['invoice_id', 'product_id', 'size'];
    protected $fillable = ['invoice_id', 'product_id', 'size', 'quantity', 'total'];

    public $incrementing = false;
}
