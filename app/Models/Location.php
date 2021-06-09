<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['slug','designation','address','locality_id','website','phone',];
    /**
     * @var string
     */
    protected $table='locations';
    /**
     * @var bool
     */
    public $timestamps= false;

    public function locality(){
        return $this->BelongsTo(Location::class);

    }









}
