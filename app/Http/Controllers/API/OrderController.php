<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $user_id = $request->get('user_id');
        $status_id = $request->get('status_id');
        $orders = Orders::index($search,$user_id,$status_id);
        return response()->json( $orders );
    }
}