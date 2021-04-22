<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marchandise extends Model
{
    protected $table = "marchandises";

    protected $fillable = ["nom", "prenom", "email", "phone", "type", "date", "tonnage", "fragile", "depart", "arrive"];
}
