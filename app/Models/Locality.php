<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $fillable = ['locality'];
    protected $table = 'localities'; //nom de la table
    public $timestamps = false;
}
