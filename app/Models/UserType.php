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
    protected $table = 'user_type';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'user_type_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_type_id', 'user_type_name'];

    
}
