<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'status_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['status_id', 'description'];

    
}
