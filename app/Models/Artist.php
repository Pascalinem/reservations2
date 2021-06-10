<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable =['firtname','lastname',];
    /**
     * @var string
     */
    protected $table="artists";
    /**
     * @var bool
     */
    public $timestamps=false;

    public function types(){

        return $this->belongsToMany(Type::class);
    }
}
