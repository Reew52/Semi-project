<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigninController extends Controller
{
        $user_name['info'] = $request->user_name;
        $uPassword = $request->uPassword;

        $result = DB::table('users')->WHERE('uUsername', $uUsername)->get()->toArray();
        
        foreach ($result as $value) {
            # code...
        }

        if ($value->uPassword == $uPassword) 
        {
            return redirect()->route('clients.index', $uUsername)->with('message','thanh cong');
        }else {
            echo 'đăng nhập thất bại';
        }
}
