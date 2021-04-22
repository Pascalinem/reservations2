<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role'];
    protected $table = 'roles'; //nom de la table
    public $timestamps = false;

    /**
     * Get the user for that association.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
