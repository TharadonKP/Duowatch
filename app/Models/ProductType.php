<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'producttype';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'productTypeID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['productTypeID', 'productTypeName'];

    
}
