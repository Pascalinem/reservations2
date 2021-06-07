<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
      /**
     * @var array
     */
    protected $fillable=['type',];
    /**
     * @var string
     */
    protected $table='types';
    /**
     * @var
     */
    public $timestamps=false;
}
