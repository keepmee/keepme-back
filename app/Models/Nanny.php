<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nanny extends Model
{
    protected $fillable = ['description', 'user_id', 'is_verified'];
}
