<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('users.login', [
            'title' => 'Login Page'
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email:filter'
        ]);

        $user = DB::select('select * from users where email = ?', [$request->input('email')]);

        $role = DB::select('select * from users_roles where user_id = ?', [array_values($user)[0] -> id]);
        
        $role_id = array_values($role)[0] -> role_id;

        if(Auth::attempt(
            [
                'email' => $request -> input('email'),
                'password' => $request-> input('password')
            ],
            $request->input('remember')
        )){
            if($role_id == 1){
                return redirect() -> route('management');
            }
            else if($role_id == 2){
                return redirect() -> route('index');
            }
        }
        Session::flash('error', 'Email or Pass doesnt match');
        return redirect() -> back();
    }
}
