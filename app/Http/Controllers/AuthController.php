<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;



class AuthController extends Controller
{
    //
    public function criar(Request $request){
        $array = ['error', ''];

        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ];
       $validator = Validator::make($request->all(),$rules);

       if($validator->fails()){
           $array['error'] = $validator->messages();

           return $array();
       }

       $email = $request->input('email');
       $password = $request->input('password');

       $novo = new User();
      $novo ->email = $email;
      $novo->password = password_hash($password,PASSWORD_DEFAULT);
      $novo->token = '';
      $novo->save();
     



        return $array;

    }
    public function login(Request $request){
        $array =['error' => ''];
 
           $creds = $request->only('email','password');

             if(Auth::attempt($creds)){

                $novo = User::where('email',$creds['email'])->first();
                $item = time().rand(0,999);
                $token = $novo->createToken($item)->plainTextToken;
                $array['token'] = $token;

             }else{
                 $array['error'] = 'E-mail /ou senha incorretos';
             }
         

        return $array;
    }
    public function logout(Request $request){

        $array =['error' => ''];

        $user = $request ->user();
        $user->tokens()->delete();

        return $array;

    }
}
