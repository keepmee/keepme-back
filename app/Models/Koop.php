<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koop extends Model
{
    protected $fillable = ["title", "description", "note", "rate", "recurrent", "children", "user_id", "address_id", "start", "end", "nanny_id"];
}
