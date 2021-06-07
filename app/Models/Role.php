<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
      /**
     * @var array
     */
    protected $fillable=['role'];
    /**
     * @var string
     */
    protected $table='roles';
    /**
     * @var
     */
    public $timestamps=false;
}
