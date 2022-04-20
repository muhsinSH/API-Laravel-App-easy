<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class RegisterController extends Controller
{

    public function Register(Request $request)
    {

     


        $employee = User::create($request->all());
        $success['token'] = $employee->createToken('Muhammed')->accessToken;
            $success['name'] = $employee->name;



  return   response()->json(["message"=>"Successful  register",$success,], 200);

}


public function login(Request $request)
{
    $user =  User::find($request->id);


    if(isNull($user)){
response()->json(["message"=>"No found of user "], 404);


    }


    if(($request->email==$user->email)&&( $request->password==$user->password)){



      return response()->json(["message"=>"Successful  login "], 200);


    }


}


// public function register(Request $request)
//     {
//         $validator = Validator::make($request->all(),[
//             'name' =>'required',
//             'email' =>'required|email',
//             'password' =>'required',
//             'c_password' =>'required|same:password',
//         ]);

//         if ($validator->fails()) {
//             return $this->sendError('Please validate error' ,$validator->errors() );
//         }

//             $input = $request->all();
//             $input['password'] = Hash::make($input['password']);
//             $user = User::create($input);
//             $success['token'] = $user->createToken('Muhammed')->accessToken;
//             $success['name'] = $user->name;

//         return $this->sendResponse($success ,'User registered successfully' );
//     }








//     public function login(Request $request)
//     {

//         if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
//         {
//             $user = Auth::user();
//             $success['token'] = $user->createToken()->accessToken();
//             $success['name'] = $user->name;
//             return $this->sendResponse($success ,'User login successfully' );
//         }
//         else{
//             return $this->sendError('Please check your Auth' ,['error'=> 'Unauthorised'] );
//         }


//     }



}
