<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    protected $table = 'product'; 

    public static function index($query="",$product_type_id="")
    {
        $sql="SELECT * FROM product 
              INNER JOIN producttype ON producttype.product_type_id=product.product_type_id
              WHERE 1 ";
        if($query!=""){
            $sql.="AND product.product_name LIKE '%$query%' OR 
                       producttype.product_type_name LIKE '%$query%' ";
        }

        if($product_type_id!=""){            
            $sql.="AND product.product_type_id=$product_type_id ";            
        } 

        $sql.="ORDER BY product.product_id ASC ";
         return DB::select($sql);
    }  
}
