<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $fillable = ['postal_code', 'locality'];
    protected $table = 'localities'; //nom de la table
    public $timestamps = false;

    /*
    *   Get the locations for the locality
    */
    public function locations(){
        return $this->hasMany('App\Models\Location');
    }
}
