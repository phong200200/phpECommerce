<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index(){
        return view('users.login', [
            'title' => 'Login Page'
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email:filter'
        ]);

        if(Auth::attempt(
            [
                'email' => $request -> input('email'),
                'password' => $request-> input('password')
            ],
            $request->input('remember')
        )){
            return redirect() -> route('admin');
        }
        Session::flash('error', 'Email or Pass doesnt match');
        return redirect() -> back();
    }
}
