<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    use HasFactory;

    protected $fillable=[
        'location_id',
        'show_id',
        'when',
    ];

    protected $table ='representations';

    public $timestamps= true;

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function show(){
        return $this->belongsTo(Show::class);
    }



}
