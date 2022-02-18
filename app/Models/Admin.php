<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'username';
    protected $hidden = ['password'];

    public $incrementing = false;
}
