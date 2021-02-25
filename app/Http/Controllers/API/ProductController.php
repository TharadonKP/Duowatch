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
        $productTypeID = $request->get('productTypeID');        
        $data = Product::index($search,$productTypeID);
        
        return response()->json($data);
    }

}