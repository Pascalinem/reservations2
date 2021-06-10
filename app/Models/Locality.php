<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Locality extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable=['postal-code','locality'];
    /**
     * @var string
     */
    protected $table='localities';
    /**
     * @var
     */
    public $timestamps=false;

    /**
     * locations correponding to the locality
     */

     public function locations(){
         return $this->hasMany(Location::class);
     }
}
