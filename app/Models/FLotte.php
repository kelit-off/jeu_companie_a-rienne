<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FLotte extends Model
{
    protected $fillable = [
        "name",
        "id_model",
        "user_id",
        "count_pnc",
        "count_pnt",
        "motorisation",
        "count_eco",
        "count_premium",
        "count_affaire",
        "fiabilite"
    ];
}
