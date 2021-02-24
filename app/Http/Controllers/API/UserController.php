<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use DB;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        //error_log ($username);
        $user = User::login($username,$password);
        if($user){
            $user = (array)$user;
            $user['message'] = 'success';
            $user['status'] = 'true';    
           // $user['token'] = sha1($username . $password . "@%#XYaU12$");        
        }else{
            $user = array(
                'message' => 'this user is not found', 
                'status' => 'false');
        }

        return response()->json($user);
    }

    public function create(Request $request)
    {
        //validate file uploading,  where image works for jpeg, png, bmp, gif, or svg
        $this->validate($request, ['file' => 'image']);

        //upload file
        $imageFileName = "";        
        $file = $request->file('file');
        if(isset($file)){
            $file->move('image',$file->getClientOriginalName());
            $imageFileName = $file->getClientOriginalName();

        }
    
        $user = new user();
        $user->username = $request->get('username');     
        $user->password = $request->get('password');
        $user->frist_name = $request->get('frist_name');
        $user->last_name = $request->get('last_name');
        $user->phone_number = $request->get('phone_number');
        $user->user_type_id = 1;
        $user->save();                
        return response()->json(array(
            'message' => 'add a user successfully', 
            'status' => 'true'));  

    }
        
    public function view($id)
    {
        $sql="SELECT * FROM user WHERE user.user_id='$id'";
        $user=DB::select($sql)[0];  
        //$user=DB::select($sql); 
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {       
        //validate file uploading,  where image works for jpeg, png, bmp, gif, or svg
        $this->validate($request, ['file' => 'image']);

        $user = user::find($id);
        $user->username = $request->get('username');     
        $user->password = $request->get('password');
        $user->frist_name = $request->get('frist_name');
        $user->last_name = $request->get('last_name');
        $user->phone_number = $request->get('phone_number');   
        $user->user_type_id = $request->get('user_type_id');

        $file = $request->file('file');
        if(isset($file)){
            $file->move('image',$file->getClientOriginalName());
            $user->image = $file->getClientOriginalName();
        }        

        $user->save();

        return response()->json(array(
            'message' => 'update a user successfully', 
            'status' => 'true'));
    }

    public function delete($id)
    {
        //hard delete
        //$user = User::find($id);
        //$user->delete();

        //soft delete
        $user = User::find($id); 
        $user->save();      
   
        return response()->json(array(
            'message' => 'delete a user successfully', 
            'status' => 'true'));
    }            
}