<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        error_log($request);

        error_log($search);
        $product_type_id = $request->get('product_type_id');        
        $data = Product::index($search,$product_type_id);
        
        return response()->json($data);
    }

}