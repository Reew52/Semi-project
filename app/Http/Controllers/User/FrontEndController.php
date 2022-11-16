<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function cart(){
        return view('users.views.cart');
    }

    public function detail(){
        return view('users.views.detail');
    }
    public function checkout(){
        return view('users.views.checkout');
    }
    public function signup(){
        return view('users.views.signup');
    }
    public function signin(){
        return view('users.views.signin');
    }
}
