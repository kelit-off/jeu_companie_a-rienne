<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamillyPlane extends Model
{
    protected $fillable = [
        "name",
        "image",
        "available_motor",
    ];
}
