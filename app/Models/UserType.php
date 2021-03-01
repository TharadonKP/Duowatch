<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usertype';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'userTypeID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userTypeID', 'userTypeName'];

    
}
