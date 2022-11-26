<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\UserModel;
use App\Http\Requests\User\SignupRequest;


class SigninController extends Controller
{
    // sign in
    public function getSign()
    {
        return view('users.views.index');
    }

    public function postSign(SignupRequest $request){
        $user_name['info'] = $request->user_name;
        $user_password = $request->user_password;

        $result = DB::table('users')->WHERE('user_name', $user_name)->get()->toArray();
        
        foreach ($result as $value) {
            # code...
        }

        if ($value->user_password == $user_password) 
        {
            return redirect()->route('index', $user_name)->with('message','thanh cong');
        }else {
            echo 'đăng nhập thất bại';
        }
    }
        
}
