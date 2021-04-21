<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'poster_id',
        'location_id',
        'bookable',
        'price',
    ];

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'shows';

    /**
     * Indicates if the model should be timestamped
     * 
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the main location of the show
     */
    public function location(){
        return $this->belongsTo('App\Models\Location');
    }

    /**
     * Get the representations of this show
     */
    public function representations(){
        return $this->hasMany('App\Models\Representation');
    }

     /**
     * Get the performance (artist in a type of collaboration) for the show
     */
    public function artistTypes()
    {
        return $this->belongsToMany(ArtistType::class);
        //soit ArtistType::class ou 'App\Models\ArtistType'
    }
}
