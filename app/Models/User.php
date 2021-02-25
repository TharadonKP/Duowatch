<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class user extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'userID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userID', 'username', 'password', 'firstName','lastName', 'phoneNumber','userTypeID'];

    public static function login($username,$password)
    {
        return DB::table('user')
                ->select('*')
                ->where('username', $username)
                ->Where('password', $password)
                ->first();
    }
}