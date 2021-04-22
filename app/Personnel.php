<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = "personnels";

    protected $fillable = ["nom", "prenom", "email", "phone", "transferts", "passagers", "heures", "depart", "arrive"];
}
