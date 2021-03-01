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
    public function create(Request $request)
    {
        //$order = new Order();
       // $user->firstName = $request->get('firstName');
       /* $user->lastName = $request->get('lastName');        
        $user->houseNo = $request->get('houseNo');
        $user->villageNo = $request->get('villageNo');
        $user->road = $request->get('road');
        $user->subdistrictID = $request->get('subdistrictID');
        $user->homePhone = $request->get('homePhone');
        $user->mobilePhone = $request->get('mobilePhone');
        $user->birthDate = $request->get('birthDate');
        $user->gender = $request->get('gender');        
        $user->username = $request->get('username');
        $user->password = $request->get('password');        
        $user->zipcode = $request->get('zipcode');
        $user->imageFileName = $imageFileName;   
        $user->email = $request->get('email');
        $user->userTypeID = 0;           
        //$user->lineID = $request->get('lineID');
        $user->isActive = 1;
        $user->save();   
        */             
        return response()->json(array(
            'message' => 'add a user successfully', 
            'status' => 'true'));

    }

}