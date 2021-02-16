<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'product_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'product_name', 'price', 'amount', 'image', 'product_type_id'];

    
}
