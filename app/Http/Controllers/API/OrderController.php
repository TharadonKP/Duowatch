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
        $userID = $request->get('userID');
        $status_id = $request->get('statusID');
        $orders = Orders::index($search,$userID,$statusID);
        return response()->json( $orders );
    }
}