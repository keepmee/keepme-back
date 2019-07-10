<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ["number", "number_2", "street_type", "street_name", "street_name_2", "place_called", "zipcode", "country", "city", "latitude", "longitude"];
}
