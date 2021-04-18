<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['type'];
    protected $table = 'types'; //nom de la table
    public $timestamps = false;

    /**
     * The artists that are defined by the type
     */
    public function artists(){
        return $this->belongsToMany('App\Models\Artist');
    }
    
}
