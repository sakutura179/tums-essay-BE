<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'feedback_id';
    protected $fillable = ['customerName', 'phone', 'email', 'message'];
}
