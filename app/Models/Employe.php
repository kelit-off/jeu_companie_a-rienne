<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        "user_id",
        "count_total_pnt",
        "salaire_pnt",
        "count_total_pnc",
        "salaire_pnc",
        "count_total_mecanicien",
        "salaire_mecanicien",
        "count_administrateur"
    ];
}
