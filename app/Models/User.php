<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['firstname', 'lastname', 'phone', 'birthday', 'email', 'address_id'];
}
