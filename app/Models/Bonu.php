<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonu extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bonus';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'bonusID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bonusID', 'bonusName', 'quantity', 'imageFileName', 'price_condition_minimum', 'price_condition_maximum'];

    
}
