<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    protected $table = 'product'; 

    public static function index($query="",$productTypeID="")
    {
        $sql="SELECT * FROM product 
              INNER JOIN producttype ON producttype.productTypeID=product.productTypeID
              WHERE 1 ";
        if($query!=""){
            $sql.="AND product.productName LIKE '%$query%' OR 
                       producttype.productTypeName LIKE '%$query%' ";
        }

        if($productTypeID!=""){            
            $sql.="AND product.productTypeID=$productTypeID ";            
        } 

        $sql.="ORDER BY product.productID ASC ";
         return DB::select($sql);
    }  
}
